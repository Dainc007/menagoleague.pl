@extends('layouts.homeLayout')

@section('title', $team->name)

@section('content')

    <section class="general-team-info">
        @include('team.inc.teamInfo')

        @include('team.inc.table')
    </section>

@endsection


{{-- Druzyna
{{$team->name}}
({{$team->device->name}})

Manager:
@if ($team->user == null)
Brak
@else
{{$team->user->name}}
@endif

@if ($team->league !== null)
Rozgrywki {{$team->league->region}}{{$team->league->level}}
<p>
    Aktualny sezon:
    {{$team->league->competitions}}
</p>
@endif

@if ($team->players !== null)
@include('team.myPlayers')
@endif --}}
