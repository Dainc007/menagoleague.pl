@extends('layouts.homeLayout')

@section('title', config('app.name', 'Competitions'))


@section('content')
    @include('competition.inc.scoreline')

    <div class="competition-content">

        @include('competition.inc.leagueInfo')

        @include('season.inc.topScorers')

        @include('season.inc.topAsists')

        @include('season.inc.cleanSheets')

        @include('season.inc.cards')
    </div>
@endsection



{{-- <h6>Liga:
    {{ $competition->league->region }}
    {{ $competition->league->type }}
    {{ $competition->league->level }}
</h6>

<p>Rozgrywki:
    {{ $competition->start }} {{ $competition->end }}
</p>

<h6>Tabela Ligowa:</h6>
@foreach ($competition->leagueTables as $row)
    <p>{{ $row }}</p>
@endforeach


<h6>Terminarz:</h6>

@if (count($competition->fixtures) > 0)
    @foreach ($competition->fixtures as $row)
        <p>{{ $row->host_id }} {{ $row->host_goals }}:{{ $row->visitor_goals }} {{ $row->visitor_id }}
            {{ $row->date }}</p>
    @endforeach
@elseif(auth()->user() && auth()->user()->isAdministrator())
    @include('fixture.create')
@else
    Nie został jeszcze wygenerowany
@endif --}}
