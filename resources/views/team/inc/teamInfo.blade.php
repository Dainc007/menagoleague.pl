<div class="teamInfo">
    <div class="r-content">
<!--        <div class="trophies">
                <div class="trophy" data-toggle="tooltip" data-placement="top"
                    title='Gets {{ rand(1, 10) }} trophies!'>
                    <img src="/images/trophy.svg" alt="">
                    <p class="number">{{ rand(1, 10) }}</p>
                </div>
        </div>-->
        <div class="player">
            <img src="{{ env('TEAM_SRC') }}{{ $team->sofifa_id ?? '111592' }}.png">
            <div class="info">
                <p class="name">{{ $team->name }}</p>
                <div>
                    <table>
                        <tr>
                            <td>Lista zawodników: <span>{{ $team->players->count() }}</span>
                        </tr>
                        <tr>
                            <td>Średnia wieku: <span>Nieznana</span></td>
                        </tr>
                        <tr>
                            <td>Stadion: <span> W budowie </span><small> (0 miejsc)</small></td>
                        </tr>
                        <tr>
                            <td colspan="2">Aktualny bilans transferowy: <span>{{$team->budget}}</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="{{ env('TEAM_SRC') }}{{ $team->sofifa_id ?? '111592' }}.png">
            <div class="info">
<!--                <div class="trophies">
                        <div class="trophy" data-toggle="tooltip" data-placement="top"
                            title='Gets {{ rand(1, 10) }} trophies!'>
                            <img src="/images/trophy.svg" alt="">
                            <p class="number">{{ rand(1, 10) }}</p>
                        </div>
                </div>-->
                <p class="name">{{ $team->name }}</p>
                <div>
                    <table>
                        <tr>
                            <td>Lista zawodników: <span>{{ $team->players->count() }}</span>
                        </tr>
                        <tr>
                            <td>Średnia wieku: <span>Nieznana</span></td>
                        </tr>
                        <tr>
                            <td>Stadion: <span> W budowie </span><small> (0 miejsc)</small></td>
                        </tr>
                        <tr>
                            <td colspan="2">Aktualny bilans transferowy: <span>{{$team->budget ?? 0}}</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="cost">
            <p class="price"><span>{{$team->value ?? 'Brak Wyceny'}}</span>
                @if($team->value)
                    <small>$M</small>
                    @endif
            </p>
            <p class="last-change"><small>Ostatnia zmiana: {{$team->updated_at->format('d-m-Y')}}</small></p>
        </div>
        <div class="info">
            <div>
                <p>{{$team->league->name}}</p>
                <p>Szczebel ligi: <span>{{$team->league->level}}</span></p>
                <p>Miejsce w tabeli: <span>Nieznane</span></p>
            </div>
        </div>
    </div>
</div>
