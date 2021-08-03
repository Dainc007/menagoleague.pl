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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .user-info__logo img {
            max-width: 80px;
            background-color: rgba(218, 221, 251, 0.5);
        }
        .user-info__team-and-name {
            font-size: 18px;
            -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
            /* color */
            color: #5079A3;
            background-color: rgba(218, 221, 251, 0.5);
        }
        .user-morale {
            font-size: 2.6rem;
            border-radius: 0px 60px 60px 0px;
            /* color */
            background-color: rgba(157, 158, 175, 0.5);
            color: #FFFFFF;
        }
        .home-nav {
            background-color: #5079A3;
        }
        .main-nav__item.active {
            background-color: lightblue;
            border-bottom: 2px solid #EE6677;
        }
        .main-nav__item.active:hover span {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

</head>

<body>
@include('sweetalert::alert')
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