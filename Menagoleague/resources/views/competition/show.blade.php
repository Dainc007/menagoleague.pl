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
    @elseif(auth()->user() && auth()->user()->isAdministrator())
    @include('fixture.create')
    @else
    Nie został jeszcze wygenerowany
    @endif
</p>