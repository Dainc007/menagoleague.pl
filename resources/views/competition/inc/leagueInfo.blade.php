<div class="leagueInfo">
    <h2>{{ __('league.' . $competition->league->region . '.' . $competition->league->level) }}</h2>

    <div class="table">
        <div class="team-info">
            <div class="legend">
                <div class="ID">ID</div>
                <div class="name">Name</div>
            </div>
            
            @foreach ($competition->leagueTables as $team)
                <div class="item">
                    <div class="ID">1</div>
                    <div class="name">{{$team->name}}</div>
                </div>
            @endforeach
        </div>

        <div class="team-stats">
            <div class="legend">
                <div class="M">M</div>
                <div class="W">W</div>
                <div class="R">R</div>
                <div class="P">P</div>
                <div class="B">B</div>
                <div class="pkt">Pkt</div>
                <div class="condition">Forma</div>
            </div>
            @for ($j = 1; $j <= 10; $j++)
                <div class="item">
                    <div class="stats">
                        <div class="M">{{ rand(0, 18) }}</div>
                        <div class="W">{{ rand(0, 10) }}</div>
                        <div class="R">{{ rand(0, 10) }}</div>
                        <div class="P">{{ rand(0, 10) }}</div>
                        <div class="B">{{ rand(0, 100) }}:{{ rand(0, 100) }}</div>
                        <div class="P">{{ rand(0, 60) }}</div>
                        <div class="condition">
                            <div class="next-match" title="?:?">?</div>
                            <div class="lose" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">L</div>
                            <div class="draw" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">R</div>
                            <div class="lose" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">L</div>
                            <div class="win" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">W</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
