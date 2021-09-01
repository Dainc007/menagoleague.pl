@extends('layouts.app')

@section('title', 'Season')

@section('content')
<div class="season-content">
    @include('season.inc.totw')
    @include('season.inc.topScorers')
    @include('season.inc.topAsists')
    @include('season.inc.cleanSheets')
    @include('season.inc.cards')
    @include('season.inc.psTournaments')
</div>
@endsection