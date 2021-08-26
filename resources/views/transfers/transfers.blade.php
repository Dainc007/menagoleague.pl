@extends('layouts.app')

@section('title', 'Transfery')

@section('content')

    <div class="transfers-content">
        <div class="content-table">
            @include('transfers.inc.transfers-menu')

            @include('transfers.inc.transfer-list')

            @include('transfers.inc.transfer-free')

            @include('transfers.inc.transfer-trade')
        </div>
    </div>


    {{-- @if (Auth::user()->team !== null)
        @include('transfers.forms.buy')
        @include('transfers.forms.loan')
    @endif --}}

@endsection
