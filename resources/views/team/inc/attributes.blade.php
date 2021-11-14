<div class="attributes-content tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="standings-tab">
    <div class="player-attributes-container">

        <div class="player-attributes-desc">
            <p class="pos">{{__('team.table.position')}}</p>

            <p class="name">{{__('team.table.name')}}</p>

            <p class="overall">{{__('team.table.age')}}</p>

            <p class="overall">{{__('team.table.ovr')}}</p>

            <p class="overall">{{__('team.table.nationality')}}</p>



        </div>

        <div class="player-attributes-content">
            @if ($user->team->players !== null)
            @foreach ($user->team->players as $player)

            <div class="player-attributes-item">
                <p class="pos">{{ __('player.positions.' . $player->playerDetails->bestPosition) }}</p>

                <a class="name" href="{{ route('players.show', ['player' => $player]) }}">
                    <img class="player-image" src="{{env('PLAYER_SRC') . $player->playerDetails->id}}.png" alt="">
                    {{ $player->name }}
                </a>

                <p class="age">{{ $player->playerDetails->age }}</p>

                <p class="overall">{{ $player->playerDetails->overall }}</p>

                <p class="nationality">{{ $player->playerDetails->nationality }}</p>
            </div>

            @endforeach
            @else
            <p>{{__('team.empty')}}W Twojej druzynie nie ma obecnie zadnego piłkarza</p>
            @endif
        </div>
    </div>
</div>