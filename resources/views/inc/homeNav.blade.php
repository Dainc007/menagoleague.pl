<div class="central-menu">
    <a class="btn active" href="{{ route('login') }}">CENTRAL</a>
    <a class="btn" href="{{ route('team') }}">SQUAD</a>
    <a class="btn" href="{{ route('transfers') }}">TRANSFERS</a>
    <div class="central-menu-item-alert">
        <a class="btn" href="{{ route('office') }}">OFFICE</a>
        <span class="material-icons alert"> notifications_active </span>
    </div>
    <a class="btn" href="{{ route('season') }}">SEASON</a>
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
            <a class="btn active" href="{{ route('login') }}">CENTRAL</a>
            <a class="btn" href="{{ route('team') }}">SQUAD</a>
            <a class="btn" href="{{ route('transfers') }}">TRANSFERS</a>
            <div class="r-central-menu-item-alert">
                <a class="btn" href="">OFFICE</a>
                <span class="material-icons alert"> notifications_active </span>
            </div>
            <a class="btn" href="{{ route('season') }}">SEASON</a>
        </div>
    </div>
</div>
