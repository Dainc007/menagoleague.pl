@extends('layouts.app')

@section('title', 'Biuro')

@section('content')
<div class="office-content">
    @include('office.messages')
    @include('office.finances')
    @include('office.fans')
    @include('office.rivals')
    @include('office.jobs')
    @include('office.stadium')
    @include('office.carrer')
</div>
@endsection