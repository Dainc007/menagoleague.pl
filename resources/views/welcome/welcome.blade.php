@extends('layouts.homeLayout')

@section('content')

@include('welcome.inc.scoreline')

@endsection

<!-- News and read more -->
@section('news')

@include('welcome.inc.news')

@endsection

<!-- Discord and menagoleague stats -->
@section('stats')

@include('welcome.inc.statsContainer')

@endsection

<!-- Gameplay overview -->
@section('gameplay')
@include('welcome.inc.gameplayOverview')
@endsection

<!-- About menagoleague -->
@section('aboutgame')
@include('welcome.inc.aboutLeague')
@endsection