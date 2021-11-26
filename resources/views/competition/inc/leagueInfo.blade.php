<div class="leagueInfo">
    <h2>{{ __('league.' . $competition->league->region . '.' . $competition->league->level) }}</h2>

    <div class="table">
        <div class="team-info">
            <div class="legend">
                <div class="ID">ID</div>
                <div class="name">Name</div>
            </div>
            @php($i = 1)
            @foreach ($competition->leagueTables as $row)
                <div class="item">
                    <div class="ID">{{ $i }}</div>
                    <div class="name">
                        <a href="{{ route('teams.show', $row->team->id) }}">
                            <img class="shield" src="{{ env('TEAM_SRC') }}{{ $row->team->sofifa_id }}.png">
                            {{ $row->team->name }}
                        </a>
                    </div>
                </div>
                @php($i++)
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
            @foreach ($competition->leagueTables as $row)
                <div class="item">
                    <div class="stats">
                        <div class="M">{{ $row->games }}</div>
                        <div class="W">{{ $row->wins }}</div>
                        <div class="R">{{ $row->draws }}</div>
                        <div class="P">{{ $row->losts }}</div>
                        <div class="B">
                            {{ $row->goals_scored }}:{{ $row->goals_lost }}</div>
                        <div class="P">{{ $row->points }}</div>
                        <div class="condition">
                            <div class="next-match" title="?:?">?</div>
                            <div class="lose" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">L</div>
                            <div class="draw" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">R</div>
                            <div class="lose" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">L</div>
                            <div class="win" title="{{ rand(0, 10) }}:{{ rand(0, 10) }}">W</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
