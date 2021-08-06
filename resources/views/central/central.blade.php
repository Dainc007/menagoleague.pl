@extends('layouts.app')

@section('title', config('app.name', 'Menago League'))


@section('content')

    <div class="central-content">

        {{-- Advance section --}}
        @include('central.inc.advance')

        {{-- Team mailbox section --}}
        @include('central.inc.mailbox')

        {{-- Notifications section --}}
        @include('central.inc.notifications')

        {{-- Standings section --}}
        @include('central.inc.standings')

    </div>

@endsection
