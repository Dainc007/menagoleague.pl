@extends('layouts.homeLayout')

@section('content')

    <div class="internationalCup-content">
        @include('help.tournaments.internationalCup')
        {{-- @include('help.tournaments.nationalCup') --}}
    </div>

@endsection
