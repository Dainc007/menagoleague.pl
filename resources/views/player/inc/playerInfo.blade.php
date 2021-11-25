<div class="playerInfo">
    <div class="r-content">
<!--        <div class="trophies">
                <div class="trophy" data-toggle="tooltip" data-placement="top"
                    title='Gets {{ rand(1, 10) }} trophies!'>
                    <img src="/images/trophy.svg" alt="">
                    <p class="number">{{ rand(1, 10) }}</p>
                </div>
        </div>-->
        <div class="player">
            <img src="{{env('PLAYER_SRC') . $player->playerDetails->id}}.png" alt="">
            <div class="info">
                <p class="name">{{ $player->name }}</p>
                <div class="about">
                    <div class="squareNum">{{ $player->playerDetails->overall }}</div>
                    <div>
                        <p>{{ __('player.positions.' . $player->playerDetails->bestPosition) }}
                            <a href="{{route('teams.show', $player->team->id)}}">({{ $player->team->name ?? 'Wolny Zawodnik' }})</a>
                        </p>
                        <p>{{ __('player.age') }}: {{ $player->playerDetails->age }} {{ __('player.years') }} <span>
                                {{ __('player.height') }}: {{ $player->playerDetails->height }}cm
                                {{ __('player.weight') }}: {{ $player->playerDetails->weight }}kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="{{env('PLAYER_SRC') . $player->playerDetails->id}}.png" alt="">
            <div class="info">
<!--                <div class="trophies">
                        <div class="trophy" data-toggle="tooltip" data-placement="top"
                            title='Gets {{ rand(1, 10) }} trophies!'>
                            <img src="/images/trophy.svg" alt="">
                            <p class="number">{{ rand(1, 10) }}</p>
                        </div>
                </div>-->
                <p class="name">{{ $player->name }}</p>
                <div class="about">
                    <div class="squareNum">{{ $player->playerDetails->overall }}</div>
                    <div>
                        <p>{{ __('player.positions.' . $player->playerDetails->bestPosition) }}
                            <a href="{{route('teams.show', $player->team->id)}}">({{ $player->team->name ?? 'Wolny Zawodnik' }})</a>
                        </p>
                        <p>{{ __('player.age') }}: {{ $player->playerDetails->age }} {{ __('player.years') }} <span>
                                {{ __('player.height') }}: {{ $player->playerDetails->height }}cm
                                {{ __('player.weight') }}: {{ $player->playerDetails->weight }}kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="cost">
            <p class="price"><span>0</span> <small>M$</small></p>
            <p class="last-change"><small>Ostatnia zmiana: 26 maj 2021</small></p>
        </div>
        <img src="{{env('TEAM_SRC')}}{{$player->team->sofifa_id ?? '111592'}}.png" alt="">
    </div>
</div>
