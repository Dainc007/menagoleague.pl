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
            </div>
            @endguest
        </div>

        <img class="btn burger-menu" src="./images/burger-menu.svg" alt="" />

        <div class="responsive-menu" style="display: none">
          <div class="responsive-menu-content">
            <div class="responsive-menu-logo">
              <a href="./Central/" class="logo"><img src="./images/logo-normal-classic.svg" alt="" /></a>

              <img class="btn close-burger-menu" src="./images/close-burger-menu.svg" alt="" />
            </div>

            <div class="r-menu">
              <div class="r-dropdown">
                <a class="r-dropdown-link" href="/">WHO ARE WE </a>
              </div>

              <div class="r-dropdown">
                <button class="btn btn-r-menu r-dropdown-link">MATCHES & STANDINGS <span class="material-icons"> arrow_right</span></button>
                <div class="r-dropdown-menu">
                  <a href="">England</a>
                  <a href="">Spain</a>
                  <a href="">Poland</a>
                  <a href="">Italy</a>
                  <a href="" class="disabled">Champions</a>
                  <a href="" class="disabled">Europe</a>
                </div>
              </div>

              <div class="r-dropdown">
                <button class="btn btn-r-menu r-dropdown-link">LEADERBOARD <span class="material-icons"> arrow_right </span></button>
                <div class="r-dropdown-menu">
                  <a href="">Link 1</a>
                  <a href="">Link 2</a>
                  <a href="">Link 3</a>
                </div>
              </div>

              <div class="r-dropdown">
                <button class="btn btn-r-menu r-dropdown-link">COMMUNITY <span class="material-icons"> arrow_right </span></button>
                <div class="r-dropdown-menu">
                  <a href="">fb</a>
                  <a href="">fb</a>
                  <a href="">dc</a>
                  <a href="">admin</a>
                </div>
              </div>

              <div class="r-dropdown">
                <button class="btn btn-r-menu r-dropdown-link">HELP <span class="material-icons">arrow_right </span></button>
                <div class="r-dropdown-menu">
                  <a href="">Rules</a>
                  <a href="">FAQ</a>
                </div>
              </div>

              <hr />

              <div class="r-nav-auth">
                @guest

                @if (Route::has('login'))
                  <a href="{{route('login')}}" class="btn">{{__('Logowanie')}}</a>
                @endif

                @if (Route::has('register'))
                  <a class="btn btn-w-border" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                @endif
                @else
                <div class="r-nav-auth-logged-user">
                  <a class="r-nav-auth-logged-user-nickname" href="">Nickname </a>
                  <div class="r-nav-auth-logged-user-settings">
                    <a href=""><span class="material-icons"> manage_accounts </span> Settings</a>
                    <a href=""><span class="material-icons"> logout </span> Logout</a>
                  </div>
                </div>
                @endguest
              </div>
            </div>
          </div>
        </div>
    </div>
</nav>