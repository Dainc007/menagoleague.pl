@extends('layouts.homeLayout')

@section('content')

    <div class="ranking-content">
        <h1>Ranking</h1>

        @include('ranking.inc.rankTabs')
    </div>

@endsection
