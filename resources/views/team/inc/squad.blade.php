<div class="squad">
    <div class="legend">
        <div class="name">Name</div>
    </div>
    <div class="info">

            @if($team->players)
                @foreach($team->players as $player)
                <div class="item">
                    <div class="name">
                        <a href="{{route('players.show', $player->id)}}">
                            {{$player->name}}
                            ({{$player->playerDetails->bestPosition}})
                            - {{$player->playerDetails->overall}}
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
