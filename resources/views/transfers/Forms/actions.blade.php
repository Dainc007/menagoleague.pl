<div class="dropdown-menu" aria-labelledby="dropdown{{ $player->id }}">
    @if($type !== 'freeAgents')
    <a class="dropdown-item" href="{{ route('transfers.negotiate', ['id' => $player->id,
        'type' => $type,
        'recipient' => 'team'
        ]) }}">Negocjuj z Klubem</a>
    @endif
    <a class="dropdown-item" href="{{ route('transfers.negotiate', ['id' => $player->id,
        'type' => $type,
        'recipient' => 'player'
        ]) }}">Negocjuj z piłkarzem</a>
</div>