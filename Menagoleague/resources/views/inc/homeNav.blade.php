<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm w-75">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">

            @if(auth()->user()->team)
            {{auth()->user()->team->name}}
            @else
            Menago League
            @endif

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">  {{ __('nav.homeNav.central') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('team')}}">
                    {{ __('nav.homeNav.team') }}
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                    {{ __('nav.homeNav.transfers') }}
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('office')}}">
                    {{ __('nav.homeNav.office') }}
                    </a>

                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                    {{ __('nav.homeNav.season') }}
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>