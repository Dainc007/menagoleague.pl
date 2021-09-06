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
@endsection