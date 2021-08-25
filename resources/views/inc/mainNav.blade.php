<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="logo" href="{{ route('home') }}">
            <img src="/images/logo-normal-classic.svg" alt="">
        </a>

        <div class="menu">
            <div class="dropdown">
                <a href="#about" class="dropdown-link">
                    {{ __('nav.mainNav.whatAreWe') }}
                </a>
            </div>
            <div class="dropdown">

                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('nav.mainNav.tablesAndFixtures') }}
                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.england') }}</a>
                    <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.spain') }}</a>
                    <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.poland') }}</a>
                    <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.italy') }}</a>
                    <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.champions') }}</a>
                    <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.europe') }}</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('nav.mainNav.help') }}
                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('rules') }}"> {{ __('nav.mainNav.rules') }}</a>
                    <a class="dropdown-item" href="{{ route('faq') }}"> {{ __('nav.mainNav.FAQ') }}</a>
                </div>
            </div>
        </div>
        <div class="nav-auth dropdown">
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="btn">{{ __('Logowanie') }}</a>
            @endif

            @if (Route::has('register'))
            <a class="btn btn-w-border" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
            @endif
            @else
            <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="material-icons"> arrow_drop_down
                </span></a>

            <div class="dropdown-menu">
                <a href="{{ route('user.account') }}">Settings</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                </a>

            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>

        <img class="btn burger-menu" src="/images/burger-menu.svg" alt="" />

        <div class="responsive-menu" style="display: none">
            <div class="container">
                <div class="responsive-menu-content">
                    <div class="responsive-menu-logo">
                        <a href="./Central/" class="logo"><img src="/images/logo-normal-classic.svg" alt="" /></a>

                        <img class="btn close-burger-menu" src="/images/close-burger-menu.svg" alt="" />
                    </div>

                    <div class="r-menu">
                        <div class="r-dropdown">
                            <a href="#about" class="r-dropdown-link">
                                {{ __('nav.mainNav.whatAreWe') }}
                            </a>
                        </div>

                        <div class="r-dropdown">
                            <button class="btn btn-r-menu r-dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('nav.mainNav.tablesAndFixtures') }}<span class="material-icons"> arrow_right</span></button>
                            <div class="r-dropdown-menu">
                                <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.england') }}</a>
                                <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.spain') }}</a>
                                <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.poland') }}</a>
                                <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.italy') }}</a>
                                <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.champions') }}</a>
                                <a href="{{ route('competition.show', 1) }}">{{ __('nav.mainNav.europe') }}</a>
                            </div>
                        </div>
                        <div class="r-dropdown">
                            <button class="btn btn-r-menu r-dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('nav.mainNav.society') }}<span class="material-icons">
                                    arrow_right </span></button>
                            <div class="r-dropdown-menu">
                                <a class="dropdown-item" href="https://www.facebook.com/groups/230246767524306" target="_blank">{{ __('nav.mainNav.fbGroup') }}</a>
                                <a class="dropdown-item" href="https://www.facebook.com/MenagoLeague" target="_blank">{{ __('nav.mainNav.fbFanPage') }}</a>
                                <a class="dropdown-item" href="https://discord.com/invite/3Jkp3YcU?utm_source=Discord%20Widget&utm_medium=Connect" target="_blank">{{ __('nav.mainNav.discord') }} </a>
                                <a class="dropdown-item" href="#admin">{{ __('nav.mainNav.admin') }}</a>
                            </div>
                        </div>

                        <div class="r-dropdown">
                            <button class="btn btn-r-menu r-dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('nav.mainNav.help') }} <span class="material-icons">arrow_right
                                </span></button>
                            <div class="r-dropdown-menu">
                                <a class="dropdown-item" href="#"> {{ __('nav.mainNav.rules') }}</a>
                                <a class="dropdown-item" href="#"> {{ __('nav.mainNav.FAQ') }}</a>
                            </div>
                        </div>

                        <hr />

                        <div class="r-nav-auth">
                            @guest

                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn">{{ __('Logowanie') }}</a>
                            @endif

                            @if (Route::has('register'))
                            <a class="btn btn-w-border" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                            @endif
                            @else
                            <div class="r-nav-auth-logged-user">
                                <a class="r-nav-auth-logged-user-nickname" href="">Nickname </a>
                                <div class="r-nav-auth-logged-user-settings">
                                    <a href="{{ route('user.account') }}"><span class="material-icons"> manage_accounts </span> Settings</a>
                                    <a href=""><span class="material-icons"> logout </span> Logout</a>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>