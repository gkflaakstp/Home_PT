<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/public.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('/js/main.js') }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <title>홈피티</title>
    </head>
    <body>
        <section class="wrap">
            @include('main.header')
            <!-- @yield('main.content') -->
            @include('main.content')
            @include('main.footer')
        </section>
    </body>
    <script>
    </script>
</html>