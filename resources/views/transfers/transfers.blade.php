@extends('layouts.app')

@section('title', 'Transfery')

@section('content')

<div class="transfers-content">
    <div class="content-table">
        
        @include('transfers.inc.transfers-menu')

        @if($type == 'transferListed')
        @include('transfers.inc.transferList')
        @endif

        @if($type == 'freeAgents')
        @include('transfers.inc.freeAgentList')
        @endif

        @if($type == 'loanListed')
        @include('transfers.inc.loanList')
        @endif
        
    </div>
</div>


{{-- @if (Auth::user()->team !== null)
        @include('transfers.forms.buy')
        @include('transfers.forms.loan')
    @endif --}}

@endsection