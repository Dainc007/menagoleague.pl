@extends('layouts.app')

@section('title', 'Season')

@section('content')
<div class="season-content">
    {{-- Team of the week --}}
    @include('season.inc.teamOTW')

    {{-- Top scorers --}}
    @include('season.inc.topScorers')

    {{-- Top Asists --}}
    @include('season.inc.topAsists')

    {{-- Clean Sheets --}}
    @include('season.inc.cleanSheets')

    {{-- Cards --}}
    @include('season.inc.cards')

    {{-- Pre-Season Tournaments --}}
    @include('season.inc.PSTournaments')
</div>
@endsection
