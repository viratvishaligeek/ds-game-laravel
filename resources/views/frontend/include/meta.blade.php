@php
    $seoSettings = app(\App\Services\AppSettingsService::class);
    $siteName = trim((string) $seoSettings->value('title', config('app.name', 'Disawar Bazaar')));
    $defaultTitle = trim((string) $seoSettings->value('meta_title', $siteName . ' | Results and Monthly Charts'));
    $defaultDescription = trim((string) $seoSettings->value('meta_description', 'Browse published result records and historical monthly charts.'));
    $pageTitle = trim((string) $__env->yieldContent('meta_title', $defaultTitle));
    $pageDescription = trim((string) $__env->yieldContent('meta_description', $defaultDescription));
    $configuredCanonicalBase = rtrim((string) $seoSettings->value('canonical_url', config('app.url', url('/'))), '/');
    $canonicalPath = request()->getPathInfo();
    $canonicalUrl = $configuredCanonicalBase . ($canonicalPath === '/' ? '/' : '/' . ltrim($canonicalPath, '/'));
    $robotsDirective = trim((string) $__env->yieldContent('meta_robots', request()->query->count() ? 'noindex,follow' : $seoSettings->value('robots_default', 'index,follow')));
    $ogImageName = trim((string) $seoSettings->value('og_image', ''));
    $socialImage = $ogImageName !== '' ? asset('logos/' . basename($ogImageName)) : asset('frontend/images/og-image.png');
    $ogTitle = request()->routeIs('index') && trim((string) $seoSettings->value('og_title', '')) !== '' ? trim((string) $seoSettings->value('og_title')) : ($pageTitle !== '' ? $pageTitle : $defaultTitle);
    $ogDescription = request()->path() === '' && trim((string) $seoSettings->value('og_description', '')) !== '' ? trim((string) $seoSettings->value('og_description')) : ($pageDescription !== '' ? $pageDescription : $defaultDescription);
    $twitterCard = in_array($seoSettings->value('twitter_card', 'summary_large_image'), ['summary', 'summary_large_image'], true) ? $seoSettings->value('twitter_card', 'summary_large_image') : 'summary_large_image';
    $faviconName = trim((string) $seoSettings->value('site_favicon', ''));
    $faviconUrl = $faviconName !== '' ? asset('logos/' . basename($faviconName)) : asset('frontend/images/favicon.png');
@endphp
<title>{{ $pageTitle !== '' ? $pageTitle : $defaultTitle }}</title>
<meta name="description" content="{{ $pageDescription !== '' ? $pageDescription : $defaultDescription }}">
<link rel="canonical" href="{{ $canonicalUrl }}">
<meta name="robots" content="{{ $robotsDirective }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ $socialImage }}">
<meta name="twitter:card" content="{{ $twitterCard }}">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
<meta name="twitter:image" content="{{ $socialImage }}">
<link rel="icon" type="image/png" href="{{ $faviconUrl }}">
<link rel="shortcut icon" href="{{ $faviconUrl }}">
<link rel="apple-touch-icon" href="{{ $faviconUrl }}">
