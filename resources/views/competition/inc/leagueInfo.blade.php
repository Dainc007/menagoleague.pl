<div class="leagueInfo">
    <h2>PREMIER LEAGUE</h2>

    <div class="table">
        <div class="team-info">
            <div class="legend">
                <div class="ID">ID</div>
                <div class="name">Name</div>
            </div>
            @for ($i = 1; $i <= 10; $i++)
                <div class="item">
                    <div class="ID">{{ $i }}</div>
                    <div class="name">Manchester Utd</div>
                </div>
            @endfor
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
                        <div class="M">{{ rand(0, 200) }}</div>
                        <div class="W">{{ rand(0, 200) }}</div>
                        <div class="R">{{ rand(0, 200) }}</div>
                        <div class="P">{{ rand(0, 200) }}</div>
                        <div class="B">{{ rand(0, 200) }}:{{ rand(0, 200) }}</div>
                        <div class="P">{{ rand(0, 200) }}</div>
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
