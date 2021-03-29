<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.882) 71.99%, rgba(206, 234, 211, 0.855) 87.12%, rgba(62, 73, 64, 0.9) 98.93%), url('/images/background.jpg');

            background-size: cover;
            min-height: 100vh;
        }
    </style>

</head>

<body>
    <div id="app">
    @include('inc.mainNav')
        <main class="py-4">
            @if(Auth::check())
            <div class="container-fluid">
                @include('inc.userShield')
            </div>
            @endif

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card my-3">
                            <div class="card-header">
                            @if(Auth::check())
                                @include('inc.homeNav')
                            @endif
                            </div>

                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @include('inc.footer')
</body>

</html>