@extends('frontend.include.layout')

@php
    $settings = app(\App\Services\AppSettingsService::class);
    $siteName = trim((string) $settings->value('site_name', config('app.name', 'Disawar Bazaar')));
    $homeTitle = trim((string) $settings->value('homepage_seo_title', $settings->value('seo_title', $siteName . ' | Results and Monthly Charts')));
    $homeDescription = trim((string) $settings->value('homepage_meta_description', $settings->value('meta_description', 'Browse published result records and historical monthly charts.')));
@endphp

@section('meta_title', $homeTitle)
@section('meta_description', $homeDescription)
@section('meta_robots', 'index,follow')

@section('content')
    <section class="hero">
        <div class="hero-glows"><span class="g1"></span><span class="g2"></span><span class="g3"></span></div>
        <div class="hero-inner">
            <div class="hero-date" data-live-date>{{ now()->timezone(config('app.timezone'))->format('d F Y | h:i A') }}</div>
            @if (!empty($featuredGame))
                <div class="hero-pill-wrap">
                    <div class="hero-pill" data-hero-pill>
                        <span class="dot"></span>
                        <span class="kind">{{ ($featuredGame['today'] ?? '--') !== '--' ? 'Latest published result:' : 'Next result:' }}</span>
                        <span class="name">{{ $featuredGame['name'] }}</span>
                        <span class="extra">— {{ $featuredGame['time'] ?? 'Time not set' }}</span>
                    </div>
                </div>
            @endif
            <div class="hero-cards">
                @forelse ($frontendResults as $gameResult)
                    <a class="hero-card {{ ['db','sg','fb','gb','gl','ds'][$loop->index % 6] }} {{ ($gameResult['today'] ?? '--') !== '--' ? 'has' : 'wait' }}"
                       href="{{ route('frontend.market', ['slug' => $gameResult['slug']]) }}" data-slug="{{ $gameResult['slug'] }}">
                        <div class="sheen"></div>
                        <div class="badge">{{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($gameResult['name'], 0, 2)) }}</div>
                        <div class="gname">{{ $gameResult['name'] }}</div>
                        <div class="num">{{ ($gameResult['today'] ?? '--') !== '--' ? $gameResult['today'] : '--' }}</div>
                        <div class="time">{{ $gameResult['time'] ?? '—' }}</div>
                    </a>
                @empty
                    <p class="muted">No active games are available right now.</p>
                @endforelse
            </div>
            <div class="hero-note">Published results are shown from the site's records.</div>
        </div>
    </section>

    <section class="live-hero">
        <h1 class="sr-only">{{ $homeTitle }}</h1>
        @if (!empty($featuredGame))
            <div class="live-box" data-live-box>
                <div class="gname">{{ $featuredGame['name'] }}</div>
                <div class="gnum">{{ ($featuredGame['today'] ?? '--') !== '--' ? $featuredGame['today'] : '--' }}</div>
                <div class="sub">{{ ($featuredGame['today'] ?? '--') !== '--' ? "Today's published result" : 'No result published today' }}</div>
                <div class="upcoming">
                    <div class="gname">{{ $featuredGame['name'] }}</div>
                    <div class="sub">Latest stored result</div>
                    <div class="gname">{{ $featuredGame['time'] ?? 'Time not set' }}</div>
                </div>
            </div>
        @else
            <div class="live-box"><div class="gname">Results</div><div class="gnum">—</div><div class="sub">No published result data is available.</div></div>
        @endif
        <div><span class="badge-live">RESULTS</span> <span class="muted">Database-backed updates</span></div>
        <div class="share-box">
            <div class="share-label">Share {{ $siteName }}</div>
            <div class="share-row">
                <a class="share-wa" href="https://wa.me/?text={{ rawurlencode($siteName . ' — ' . url('/')) }}" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                <a class="share-fb" href="https://www.facebook.com/sharer/sharer.php?u={{ rawurlencode(url('/')) }}" target="_blank" rel="noopener noreferrer">Facebook</a>
                <a class="share-x" href="https://x.com/intent/tweet?text={{ rawurlencode($siteName . ' results') }}&url={{ rawurlencode(url('/')) }}" target="_blank" rel="noopener noreferrer">X</a>
                <button type="button" class="share-copy" data-copy="{{ url('/') }}">Copy Link</button>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="wrap">
            <div class="center">
                <h2>{{ $monthLabel }} — Monthly Results Chart</h2>
                <p class="muted">Published values are loaded from stored game results. Missing or future dates are not fabricated.</p>
            </div>
            @forelse ($monthlyTables as $table)
                <div class="table-scroll" style="margin-top:16px">
                    <table class="chart-table">
                        <thead>
                            <tr>
                                <th class="wk-h">Date</th>
                                @foreach ($table['games'] as $game)
                                    <th><a href="{{ route('frontend.market', ['slug' => $game->slug]) }}">{{ $game->name }}</a></th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table['dates'] as $date)
                                <tr>
                                    <td class="wk">{{ $date->format('d M') }}</td>
                                    @foreach ($table['games'] as $game)
                                        @php $value = $table['results'][$game->id][$date->day] ?? null; @endphp
                                        <td>{{ $date->gt(now()->timezone(config('app.timezone'))->startOfDay()) ? '—' : ($value !== null && $value !== '' ? $value : '—') }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @empty
                <p class="muted center">No active games are configured, so a monthly chart cannot be displayed yet.</p>
            @endforelse
            <div class="center" style="margin-top:16px">
                @if ($games->isNotEmpty())
                    <a class="btn" href="{{ route('frontend.market', ['slug' => $games->first()->slug]) }}">VIEW GAME CHARTS →</a>
                @endif
            </div>
        </div>
    </section>

    <section class="lrb-section">
        <div class="lrb-inner">
            <div class="lrb-heading">
                <h2 class="lrb-title">Today's Results</h2>
                <p class="lrb-subtitle">{{ now()->timezone(config('app.timezone'))->format('l, d M Y') }}</p>
                <div class="lrb-meta">
                    <span class="lrb-updated" data-lrb-updated></span>
                    <button type="button" class="lrb-refresh-btn" data-lrb-refresh>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12a9 9 0 1 1-2.6-6.4" /><path d="M21 3v6h-6" /></svg>
                        REFRESH
                    </button>
                </div>
            </div>
            <div class="lrb-grid">
                @forelse ($frontendResults as $gameResult)
                    @php $hasResult = ($gameResult['today'] ?? '--') !== '--'; @endphp
                    <a class="lrb-card" data-state="{{ $hasResult ? 'declared' : 'awaited' }}" data-slug="{{ $gameResult['slug'] }}" href="{{ route('frontend.market', ['slug' => $gameResult['slug']]) }}">
                        <div class="lrb-header">
                            <span class="lrb-name">{{ $gameResult['name'] }}</span>
                            <span class="lrb-badge {{ $hasResult ? 'lrb-badge--declared' : 'lrb-badge--awaited' }}">{{ $hasResult ? 'Published' : 'Awaiting result' }}</span>
                        </div>
                        <div class="lrb-body">
                            <span class="lrb-num {{ $hasResult ? 'lrb-num--declared' : '' }}">{{ $hasResult ? $gameResult['today'] : '—' }}</span>
                            <span class="lrb-time">{{ $hasResult ? 'Result recorded' : 'Expected' }} <strong>{{ $gameResult['time'] ?? 'Time not set' }}</strong></span>
                        </div>
                    </a>
                @empty
                    <p class="muted">No active games are available right now.</p>
                @endforelse
            </div>
        </div>
    </section>

    @if ($homepageSections->isNotEmpty())
        <section class="section">
            <div class="wrap">
                @foreach ($homepageSections as $homepageSection)
                    <article class="blog-card">
                        <h2>{{ $homepageSection->title }}</h2>
                        @if (filled($homepageSection->content))
                            <p class="muted">{{ \Illuminate\Support\Str::limit(strip_tags((string) $homepageSection->content), 2500) }}</p>
                        @endif
                    </article>
                @endforeach
            </div>
        </section>
    @endif

    <section class="section">
        <div class="wrap">
            <div class="center">
                <h2>Available Games</h2>
                <p class="muted">Choose a game to view its published monthly records and result history.</p>
            </div>
            <div class="seo-games" style="margin-top:16px">
                @forelse ($games as $game)
                    <a class="seo-game" href="{{ route('frontend.market', ['slug' => $game->slug]) }}">
                        <div class="mark">{{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($game->name, 0, 2)) }}</div>
                        <div>
                            <div class="t">{{ $game->name }}</div>
                            <div class="muted small">{{ $game->result_time ? \Carbon\Carbon::parse($game->result_time)->format('h:i A') : 'Result time not configured' }} · View monthly chart and history</div>
                        </div>
                    </a>
                @empty
                    <p class="muted">No active games have been published yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="wrap" style="max-width:860px">
            <div class="blog-card" style="margin-bottom:32px">
                <h2>{{ $siteName }}</h2>
                <p class="muted">{{ $homeDescription }}</p>
                <div class="stat-row">
                    <div><div class="v">{{ $games->count() }}</div><div class="muted small">Active games</div></div>
                    <div><div class="v">{{ number_format($publishedResultCount) }}</div><div class="muted small">Published result records</div></div>
                    <div><div class="v">{{ $oldestResultDate ? \Carbon\Carbon::parse($oldestResultDate)->format('Y') : '—' }}</div><div class="muted small">Oldest available record</div></div>
                </div>
            </div>

            @if ($faqs->isNotEmpty())
                <h2>Frequently Asked Questions</h2>
                <p class="muted">Answers published by the site administrator.</p>
                <div class="faq" style="margin-bottom:36px">
                    @foreach ($faqs as $faq)
                        <details>
                            <summary>{{ $faq->question }}</summary>
                            <p class="muted">{{ $faq->answer }}</p>
                        </details>
                    @endforeach
                </div>
            @endif

            <h2>How to view historical results</h2>
            <div class="how-step"><div class="num">01</div><div><h3>Choose a game</h3><p class="muted">Select an active game from the list above.</p></div></div>
            <div class="how-step"><div class="num">02</div><div><h3>Select a month and year</h3><p class="muted">Use the available filters on the game's result page to browse stored records.</p></div></div>
            <div class="how-step"><div class="num">03</div><div><h3>Check published values</h3><p class="muted">Blank values indicate that no result is published for that date.</p></div></div>
        </div>
    </section>
@endsection

@push('schema')
    <script type="application/ld+json">{!! json_encode($homeSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) !!}</script>
@endpush
