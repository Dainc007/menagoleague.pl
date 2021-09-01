<div class="transfers-menu">
    <a class="btn active {{-- request()->segment(2) == 'transferList' ? 'active' : '' --}}" href="{{-- route('') --}}">Lista transferowa</a>
    <a class="btn {{-- request()->segment(2) == 'freePlayers' ? 'active' : '' --}}" href="{{-- route('') --}}">Wolni Zawodnicy</a>
    <a class="btn {{-- request()->segment(2) == 'PlayersToTrade' ? 'active' : '' --}}" href="{{-- route('') --}}">Do wypożyczenia</a>
</div>
