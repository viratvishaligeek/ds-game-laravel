@php
    $seoSettings = app(\App\Services\AppSettingsService::class);
    $siteName = trim((string) $seoSettings->value('site_name', config('app.name', 'Disawar Bazaar')));
    $defaultTitle = trim((string) $seoSettings->value('seo_title', $siteName . ' | Results and Monthly Charts'));
    $defaultDescription = trim((string) $seoSettings->value('meta_description', 'Browse published result records and historical monthly charts.'));
    $pageTitle = trim((string) $__env->yieldContent('meta_title', $defaultTitle));
    $pageDescription = trim((string) $__env->yieldContent('meta_description', $defaultDescription));
    $configuredCanonicalBase = rtrim((string) $seoSettings->value('canonical_url', config('app.url', url('/'))), '/');
    $canonicalPath = request()->getPathInfo();
    $canonicalUrl = $configuredCanonicalBase . ($canonicalPath === '/' ? '/' : '/' . ltrim($canonicalPath, '/'));
    $robotsDirective = trim((string) $__env->yieldContent('meta_robots', request()->query->count() ? 'noindex,follow' : 'index,follow'));
    $socialImage = trim((string) $seoSettings->value('social_image', asset('frontend/images/og-image.png')));
@endphp
<title>{{ $pageTitle !== '' ? $pageTitle : $defaultTitle }}</title>
<meta name="description" content="{{ $pageDescription !== '' ? $pageDescription : $defaultDescription }}">
<link rel="canonical" href="{{ $canonicalUrl }}">
<meta name="robots" content="{{ $robotsDirective }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $pageTitle !== '' ? $pageTitle : $defaultTitle }}">
<meta property="og:description" content="{{ $pageDescription !== '' ? $pageDescription : $defaultDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ $socialImage }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $pageTitle !== '' ? $pageTitle : $defaultTitle }}">
<meta name="twitter:description" content="{{ $pageDescription !== '' ? $pageDescription : $defaultDescription }}">
<meta name="twitter:image" content="{{ $socialImage }}">
<link rel="icon" type="image/png" href="{{ URL::asset('frontend') }}/images/favicon.png">
<link rel="shortcut icon" href="{{ URL::asset('frontend') }}/images/favicon.ico">
<link rel="apple-touch-icon" href="{{ URL::asset('frontend') }}/images/favicon.png">
