<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet/scss" href="{{ asset('sass/main.scss') }}" type="text/css"/>
        <link rel="stylesheet/scss" href="{{ asset('sass/public.scss') }}" type="text/css">
        <script src="{{ asset('/js/app.js') }}"></script>
        <title>홈피티</title>
    </head>
    <body>
        <section class="wrap">
            @include('main.header')
            @yield('main.content')
            @include('main.footer')
        </section>
    </body>
    <script>
    </script>
</html>