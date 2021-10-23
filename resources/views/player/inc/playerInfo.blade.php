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
                        <p>Napastnik (Bayern Monachium)</p>
                        <p>Wiek: 32 (12.12.1234) <span>{{ rand(180, 200) }}cm {{ rand(80, 100) }}kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="/images/placeholder-person.svg" alt="">
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
                    <div class="squareNum">{{ rand(80, 100) }}</div>
                    <div>
                        <p>Napastnik (Bayern Monachium)</p>
                        <p>Wiek: 32 (12.12.1234) <span>{{ rand(180, 200) }}cm {{ rand(80, 100) }}kg</span></p>
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
