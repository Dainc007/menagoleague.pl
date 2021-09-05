<div class="central-menu">
    <a class="btn {{ request()->segment(1) == 'central' ? 'active' : '' }}"
        href="{{ route('central') }}">{{ __('nav.homeNav.central') }}</a>
    <a class="btn {{ request()->segment(1) == 'teams' ? 'active' : '' }}"
        href="{{ route('team') }}">{{ __('nav.homeNav.team') }}</a>
    <a class="btn {{ request()->segment(1) == 'transfers' ? 'active' : '' }}"
        href="{{ route('transfers', 'transferListed') }}">{{ __('nav.homeNav.transfers') }}</a>
    <div class="central-menu-item-alert">
        <a class="btn {{ request()->segment(1) == 'office' ? 'active' : '' }}"
            href="{{ route('office') }}">{{ __('nav.homeNav.office') }}</a>
        <span class="notification">2</span>
    </div>
    <a class="btn {{ request()->segment(1) == 'seasons' ? 'active' : '' }}"
        href="{{ route('season') }}">{{ __('nav.homeNav.season') }}</a>
</div>

<div class="r-burger-button">
    <img class="btn central-burger-menu" src="{{ url('/images/burger-menu.svg') }}" alt="" />
</div>

<div class="responsive-central-menu" style="display: none">
    <div class="responsive-menu-content">
        {{-- <div class="responsive-menu-logo">
            <img class="btn close-burger-game-menu" src="../images/close-burger-menu.svg" alt="" />
        </div> --}}

        <div class="r-menu">
            <a class="btn {{ request()->segment(1) == 'central' ? 'active' : '' }}"
                href="{{ route('login') }}">CENTRAL</a>
            <a class="btn {{ request()->segment(1) == 'teams' ? 'active' : '' }}"
                href="{{ route('team') }}">SQUAD</a>
            <a class="btn {{ request()->segment(1) == 'transfers' ? 'active' : '' }}"
                href="{{ route('transfers', 'transferListed') }}">TRANSFERS</a>
            <div class="r-central-menu-item-alert">
                <a class="btn {{ request()->segment(1) == 'office' ? 'active' : '' }}" href="">OFFICE</a>
                <span class="notification">2</span>
            </div>
            <a class="btn {{ request()->segment(1) == 'seasons' ? 'active' : '' }}"
                href="{{ route('season') }}">SEASON</a>
        </div>
    </div>
</div>
