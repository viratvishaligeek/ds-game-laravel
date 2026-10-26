<?php

namespace App\Providers;

use App\Models\CommunityPost;
use App\Models\Game;
use App\Models\Page;
use App\Models\Result;
use App\Services\AppSettingsService;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer(['frontend.include.header', 'frontend.include.footer'], function ($view) {
            $reservedSlugs = [
                'about', 'about-us', 'contact', 'whatsapp', 'faq', 'privacy-policy',
                'terms-and-conditions', 'terms-conditions', 'disclaimer',
            ];

            $pages = request()->attributes->get('frontend_nav_pages');
            if ($pages === null) {
                $pages = Page::query()
                    ->where('status', 'active')
                    ->where('menu_visible', true)
                    ->whereNotIn('slug', $reservedSlugs)
                    ->orderBy('menu_order')
                    ->orderBy('name')
                    ->get(['id', 'name', 'slug']);
                request()->attributes->set('frontend_nav_pages', $pages);
            }

            $frontendData = request()->attributes->get('frontend_shared_data');
            if ($frontendData === null) {
                $now = now()->timezone(config('app.timezone'));
                $games = Game::query()->where('status', 'active')
                    ->orderBy('serial')->orderBy('id')
                    ->get(['id', 'name', 'slug', 'serial', 'result_time']);
                $dateMap = [];
                foreach ($games as $game) {
                    $today = $game->businessDate($now);
                    $dateMap[$game->id] = [
                        'today' => $today,
                        'yesterday' => Carbon::parse($today, config('app.timezone'))->subDay()->toDateString(),
                    ];
                }

                $dateKeys = collect($dateMap)->flatMap(fn (array $dates) => array_values($dates))->unique()->values();
                $results = Result::query()->whereIn('game_id', $games->pluck('id'))
                    ->where('type', 'jodi')->whereIn('game_date', $dateKeys)
                    ->orderByDesc('id')->get(['game_id', 'game_date', 'number'])->groupBy('game_id');
                $frontendResults = $games->map(function (Game $game) use ($results, $dateMap) {
                    $gameResults = $results->get($game->id, collect());
                    $todayResult = $gameResults->firstWhere('game_date', $dateMap[$game->id]['today'])?->number;
                    $yesterdayResult = $gameResults->firstWhere('game_date', $dateMap[$game->id]['yesterday'])?->number;

                    return [
                        'id' => $game->id,
                        'name' => $game->name,
                        'slug' => $game->slug,
                        'time' => $game->result_time ? Carbon::parse($game->result_time)->format('h:i A') : '—',
                        'today' => filled($todayResult) ? (string) $todayResult : '--',
                        'yesterday' => filled($yesterdayResult) ? (string) $yesterdayResult : '--',
                    ];
                })->values();

                $settings = app(AppSettingsService::class);
                $logoName = trim((string) $settings->value('site_logo', ''));
                $frontendData = [
                    'frontendResults' => $frontendResults,
                    'siteName' => trim((string) $settings->value('title', config('app.name', 'Disawar Bazaar'))),
                    'siteLogo' => $logoName !== '' ? asset('logos/' . basename($logoName)) : asset('frontend/images/logo.png'),
                    'siteDescription' => trim((string) $settings->value('footer_description', $settings->value('site_description', 'Published results and historical monthly records.'))),
                    'contactPhone' => trim((string) $settings->value('contact_phone', '')),
                    'copyrightText' => trim((string) $settings->value('copyright_text', '')),
                    'socialFacebook' => trim((string) $settings->value('social_facebook', '')),
                    'socialWhatsApp' => trim((string) $settings->value('social_whatsapp', '')),
                    'socialInstagram' => trim((string) $settings->value('social_instagram', '')),
                    'socialYouTube' => trim((string) $settings->value('social_youtube', '')),
                    'socialTelegram' => trim((string) $settings->value('social_telegram', '')),
                    'approvedCommunityExists' => CommunityPost::query()->where('status', 'approved')->exists(),
                ];
                request()->attributes->set('frontend_shared_data', $frontendData);
            }

            $view->with('navPages', $pages);
            $view->with($frontendData);
        });
    }
}
