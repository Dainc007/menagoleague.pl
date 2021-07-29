<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="logo" href="{{ route('home') }}">
            <img src="images/logo-normal-classic.svg" alt="">
        </a>

        <div class="menu">
            <div class="dropdown">
                <a href="{{route('welcome')}}" class="dropdown-link">
                    {{__('nav.mainNav.whatAreWe')}}
                </a>
            </div>
            <div class="dropdown">
                <a class="dropdown-link">
                    {{__('nav.mainNav.tablesAndFixtures')}}
                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a href="#">{{ __('nav.mainNav.england') }}</a>
                    <a href="#">{{ __('nav.mainNav.spain') }}</a>
                    <a href="#">{{ __('nav.mainNav.poland') }}</a>
                    <a href="#">{{ __('nav.mainNav.italy') }}</a>
                    <a class="disabled" href="#">{{ __('nav.mainNav.champions') }}</a>
                    <a class="disabled" href="#">{{ __('nav.mainNav.europe') }}</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-link">
                    {{ __('nav.mainNav.society') }}
                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.facebook.com/groups/230246767524306" target="_blank">{{ __('nav.mainNav.fbGroup') }}</a>
                    <a class="dropdown-item" href="https://www.facebook.com/MenagoLeague" target="_blank">{{ __('nav.mainNav.fbFanPage') }}</a>
                    <a class="dropdown-item" href="https://discord.gg/w73uDUjse8" target="_blank">{{ __('nav.mainNav.discord') }} </a>
                    <a class="dropdown-item" href="#admin">{{ __('nav.mainNav.admin') }}</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-link">
                    {{ __('nav.mainNav.help') }}
                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">    {{ __('nav.mainNav.rules') }}</a>
                    <a class="dropdown-item" href="#">    {{ __('nav.mainNav.FAQ') }}</a>
                </div>
            </div>
        </div>
        <div class="nav-auth">
            @guest
            @if (Route::has('login'))
                <a href="{{route('login')}}" class="btn">{{__('Logowanie')}}</a>
            @endif

            @if (Route::has('register'))
                <a class="btn btn-w-border" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
            @endif
            @else
            <a class="dropdown-link">Nickname <span class="material-icons"> arrow_drop_down </span></a>
            <div class="dropdown-menu">
              <a href="#">Settings</a>
              <a href="#">Logout</a>
            @endguest
        </div>
    </div>
</nav>