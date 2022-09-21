<!DOCTYPE html>
<html lang="ko">
    <head>
        @include('public')
        <title></title>
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