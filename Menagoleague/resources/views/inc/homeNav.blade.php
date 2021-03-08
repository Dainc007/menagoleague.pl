<!--                     <div class="w-100">
                        <nav class="main-nav d-flex align-items-center">
                            <a class="main-nav__item" href="">
                                <span>Centrala</span>
                            </a>
                            <a class="main-nav__item" href="">
                                <span>Drużyna</span>
                            </a>
                            <a class="main-nav__item" href="">
                                <span>Transfery</span>
                            </a>
                            <a class="main-nav__item" href="">
                                <span class="gotMessage">

                                    Masz Wiadomość<img src="../CSS/pictures/email.png" title="Icon made by Smartline from flaticon.com">

                                </span>
                            </a>
                            <a class="main-nav__item" href="../season/season">
                                <span>Sezon</span>
                            </a>
                        </nav>
                    </div> -->

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm w-75">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            @if($personal_data->team)
            {{$personal_data->team->name}}
            @endif
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Centrala') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ __('Drużyna') }}
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ __('Transfery') }}
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ __('Biuro') }}
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ __('Sezon') }}
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>