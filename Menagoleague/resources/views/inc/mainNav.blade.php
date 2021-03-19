<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Menago League') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> {{ __('nav.mainNav.whatAreWe') }}</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    {{ __('nav.mainNav.tablesAndFixtures') }}
                    </a>
                    <div class="dropdown-menu" id="">
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.england') }}</a>
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.spain') }}</a>
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.poland') }}</a>
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.italy') }}</a>
                        <a class="dropdown-item disabled" href="#">{{ __('nav.mainNav.champions') }}</a>
                        <a class="dropdown-item disabled" href="#">{{ __('nav.mainNav.europe') }}</a>

                    </div>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    {{ __('nav.mainNav.society') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.fbFanPage') }}</a>
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.fbGroup') }}</a>
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.discord') }}</a>
                        <a class="dropdown-item" href="#">{{ __('nav.mainNav.admin') }}</a>
                    </div>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    {{ __('nav.mainNav.leaderboards') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    {{ __('nav.mainNav.help') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">    {{ __('nav.mainNav.rules') }}</a>
                        <a class="dropdown-item" href="#">    {{ __('nav.mainNav.FAQ') }}</a>
                    </div>
                </li>
         
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Logowanie') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('user.account') }}">
                            {{ __('Ustawienia Konta') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Wyloguj') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>