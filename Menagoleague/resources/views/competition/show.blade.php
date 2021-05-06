<!-- Co powinienem widzieć wchodząc na widok rozgrywek? -->
<!-- Na pewno tabelę rozgrywek i terminarz rozgrywek, oraz co to za rozgrywki, jaka liga
oraz od kiedy do kiedy trwały -->

<h6>Liga:
    {{$competition->league->region}}
    {{$competition->league->type}}
    {{$competition->league->level}}
</h6>

<p>Rozgrywki:
    {{$competition->start}} {{$competition->end}}
</p>

<p>Tabela Ligowa:
    @foreach($competition->leagueTables as $row)
    {{$row->team_id}}
    @endforeach
</p>

<p>Terminarz:
    @if(count($competition->fixtures) > 0)
    @foreach($competition->fixtures as $row)
    {{$row}}
    @endforeach
    @else
    Nie został jeszcze wygenerowany
    @endif
</p>