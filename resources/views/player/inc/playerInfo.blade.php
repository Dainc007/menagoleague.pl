<div class="playerInfo">
    <div class="r-content">
        <div class="trophies">
            @php
                $how = rand(1, 8);
            @endphp
            @for ($i = 1; $i <= $how; $i++)
                <div class="trophy" data-toggle="tooltip" data-placement="top"
                    title='Gets {{ rand(1, 10) }} trophies!'>
                    <img src="/images/trophy.svg" alt="">
                    <p class="number">{{ rand(1, 10) }}</p>
                </div>
            @endfor
        </div>
        <div class="player">
            <img src="{{env('PLAYER_URL')}}" alt="">
            <div class="info">
                <p class="name">{{$player->name}}</p>
                <div class="about">
                    <div class="squareNum">{{ rand(80, 100) }}</div>
                    <div>
                        <p>{{__('player.positions.' .  $player->playerDetails->bestPosition)}} ({{$player->playerDetails->club}})</p>
                        <p>{{__('player.age')}}: {{$player->playerDetails->age}} {{__('player.years')}} <span>
                            {{__('player.height')}}: {{$player->playerDetails->height}}cm
                            {{__('player.weight')}}: {{$player->playerDetails->weight}}kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="https://fifastatic.fifaindex.com/FIFA22/players/{{$player->playerDetails->id}}.png" alt="">
            <div class="info">
                <div class="trophies">
                    @for ($i = 1; $i <= $how; $i++)
                        <div class="trophy" data-toggle="tooltip" data-placement="top"
                            title='Gets {{ rand(1, 10) }} trophies!'>
                            <img src="/images/trophy.svg" alt="">
                            <p class="number">{{ rand(1, 10) }}</p>
                        </div>
                    @endfor
                </div>
                <p class="name">{{$player->name}}</p>
                <div class="about">
                    <div class="squareNum">{{ $player->playerDetails->overall }}</div>
                    <div>
                        <p>{{__('player.positions.' .  $player->playerDetails->bestPosition)}} ({{$player->playerDetails->club}})</p>
                        <p>{{__('player.age')}}: {{$player->playerDetails->age}} {{__('player.years')}} <span>
                            {{__('player.height')}}: {{$player->playerDetails->height}}cm
                            {{__('player.weight')}}: {{$player->playerDetails->weight}}kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="cost">
            <p class="price"><span>10,00</span> <small>mln €</small></p>
            <p class="last-change"><small>Ostatnia zmiana: 26 maj 2021</small></p>
        </div>
        <img src="/images/shields/{{ rand(1, 8) }}.png" alt="">
    </div>
</div>
