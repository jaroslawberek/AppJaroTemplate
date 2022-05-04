<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.admin_name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="{{asset('js\jquery\dist\jquery.js')}}"></script>
    <script src="{{asset('css\bootstrap-4.4.1\js\bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/backend.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css\font-awesome-master\css\all.min.css')}}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css\bootstrap-4.4.1\css\bootstrap.min.css')}}">
        <link href="{{ asset('css/admin.css') }}?ver=93555455444" rel="stylesheet">
    </head>
    <body class="app header-fixed sidebar-fixed sidebar-lg-show">
        <div id="app-body">

            @include("layouts.backend.header")
            @include("layouts.backend.sidebar")
            
            <main class="main">
                <div class="app container-fluid">
                    @yield('content')
                </div>

            </main>
            
            @include("layouts.backend.footer")          

        </div>
    </body>
</html>
