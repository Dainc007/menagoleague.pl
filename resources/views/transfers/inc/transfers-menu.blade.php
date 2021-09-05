<div class="transfers-menu">
    <a class="btn active {{-- request()->segment(2) == 'transferList' ? 'active' : '' --}}" href="{{ route('transfers', 'transferListed') }}">Lista transferowa</a>
    <a class="btn {{-- request()->segment(2) == 'loanList' ? 'active' : '' --}}" href="{{ route('transfers', 'loanListed') }}">Do wypożyczenia</a>
    <a class="btn {{-- request()->segment(2) == 'freeAgents' ? 'active' : '' --}}" href="{{ route('transfers', 'freeAgents') }}">Wolni Zawodnicy</a>
</div>