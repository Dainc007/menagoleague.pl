@extends('layouts.app')

@section('title', 'Transfery')

@section('content')

    <div class="transfers-content">
        @if ($user->team)
            <div class="content-table">

                @include('transfers.inc.transfers-menu')

                @if ($type == 'transferListed')
                    @include('transfers.inc.transferList')
                @endif

                @if ($type == 'freeAgents')
                    @include('transfers.inc.freeAgentList')
                @endif

                @if ($type == 'loanListed')
                    @include('transfers.inc.loanList')
                @endif

            </div>
        @else
        <div class="alert alert-info" role="alert">
            <h6> {{__('team.noJob')}} <a href="{{route('help.tutorial') }}">
            </h6>
          </div>
        @endif
    </div>
@endsection
