<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.include.meta')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700;900&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('frontend') }}/css/style.css">
    <script>
        document.documentElement.classList.add('js-reveal');
        setTimeout(function() {
            if (!document.querySelector('.reveal-run')) document.documentElement.classList.remove('js-reveal');
        }, 9000);
    </script>
    @yield('style')
</head>

<body>
    @include('frontend.include.header')
    <main>
        @yield('content')
    </main>
    @include('frontend.include.footer')
    <script src="{{ URL::asset('frontend') }}/js/app.js"></script>
    @yield('script')
</body>

</html>
