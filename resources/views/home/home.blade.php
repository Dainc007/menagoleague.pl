@extends('layouts.homeLayout')

@section('content')

@include('home.inc.scoreline')

@endsection

<!-- News and read more -->
@section('news')

@include('home.inc.news')

@endsection

<!-- Discord and menagoleague stats -->
@section('stats')

@include('home.inc.statsContainer')

@endsection

<!-- Gameplay overview -->
@section('gameplay')
@include('home.inc.gameplayOverview')
@endsection

<!-- About menagoleague -->
@section('aboutgame')
@include('home.inc.aboutLeague')
@endsection