@extends('layouts.app')

@section('title', 'Biuro')

@section('content')
<div class="office-content">
    {{-- Messages --}}
    @include('office.messages')

    {{--Finances (All, Incomes, Outgoing --}}
    @include('office.finances')

    {{-- Fans (details about them)  --}}
    @include('office.fans')

    {{-- Rivals --}}
    @include('office.rivals')

    {{-- Jobs offer --}}
    @include('office.jobs')

    {{-- Stadium --}}
    @include('office.stadium')

    {{-- Carrer --}}
    @include('office.carrer')
</div>
@endsection