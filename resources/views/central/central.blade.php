@extends('layouts.app')

@section('title', config('app.name', 'Menago League'))


@section('content')

<div class="central-content">

    {{-- Advance section --}}
    @include('central.inc.calendar')

    {{-- Team assistant section --}}
    @include('central.inc.assistant')

    {{-- Notifications section --}}
    @include('central.inc.notifications')

    {{-- Standings section --}}
    @include('central.inc.standings')

</div>

{{-- @include('calendar.fullcalendar') --}}

@endsection
