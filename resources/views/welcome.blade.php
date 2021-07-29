@extends('layouts.homeLayout')

@section('content')

@include('inc.scoreline')

@endsection

<!-- News and read more -->
@section('news')

@include('inc.news')

@endsection

<!-- Discord and menagoleague stats -->
@section('stats')

@include('inc.statscontainer')

@endsection

<!-- Gameplay overview -->
@section('gameplay')
@include('inc.gpoverview')
@endsection

<!-- About menagoleague -->
@section('aboutgame')
@include('inc.aboutleague')
@endsection