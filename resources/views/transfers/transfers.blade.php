@extends('layouts.app')

@section('title', 'Transfery')

@section('content')

    <div class="transfers-content">
        <div class="content-table">
            @include('transfers.inc.transfers-menu')

            @include('transfers.inc.transfer-list')
        </div>
    </div>


    {{-- <h6>Wolni Zawodnicy</h6>
    <h6>{{ $freeAgentList->links() }}</h6>
    @foreach ($freeAgentList as $player)
        {{ $player }}
    @endforeach

    <h6>Do Wypozyczenia</h6>
    <h6>{{ $loanList->links() }}</h6>
    @foreach ($loanList as $player)
        {{ $player }}
    @endforeach

    @if (Auth::user()->team !== null)
        @include('transfers.forms.buy')
        @include('transfers.forms.loan')
    @endif --}}

@endsection
