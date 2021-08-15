<div class="attributes-content tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="standings-tab">
    <div class="player-attributes-container">

        <div class="player-attributes-desc">
            <p class="pos">{{__('team.table.position')}}</p>

            <p class="name">{{__('team.table.name')}}</p>

            <p class="overall">{{__('team.table.ovr')}}</p>

            <p class="role">{{__('team.table.role')}}</p>

            <p class="action">{{__('team.table.act')}}</p>
        </div>

        <div class="player-attributes-content">
            @if ($user->team->players !== null)
            @foreach ($user->team->players as $player)

            <div class="player-attributes-item">
                <p class="pos">{{-- {{ $player->position }} --}} LM CM CAM</p>

                <a class="name" href="{{ route('players.show', ['player' => $player]) }}">
                    <img class="player-image" src="https://picsum.photos/50/50" alt="">
                    {{ $player->name }}
                </a>

                <p class="age">{{ $player->age }}</p>

                <p class="overall">{{ $player->overall }}</p>

                <p class="nationality">{{ $player->nationality }}</p>
            </div>

            @endforeach
            @else
            <p>{{__('team.empty')}}W Twojej druzynie nie ma obecnie zadnego piłkarza</p>
            @endif
        </div>
    </div>
</div>