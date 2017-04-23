<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('image/icon/icon-laravel.png') }}">
        <title>@yield('title')</title>
        @yield('css')
    </head>
    <body>
    @yield('content')
    <script type="javascript" src="{{ asset('js/app.js') }}}"></script>
    <!-- Angular 1.3.12 -->
    <script type="javascript" src="{{ asset('js/angular/angular.min.js') }}"></script>
    @yield('script')
    </body>
</html>