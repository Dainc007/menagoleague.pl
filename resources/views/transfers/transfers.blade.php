@extends('layouts.app')

@section('title', 'Transfery')

@section('content')

<h6>Lista Transferowa</h6>
<h6>{{$transferList->links()}}</h6>
@foreach($transferList as $player)
{{$player}}
@endforeach

<h6>Wolni Zawodnicy</h6>
<h6>{{$freeAgentList->links()}}</h6>
@foreach($freeAgentList as $player)
{{$player}}
@endforeach

<h6>Do Wypozyczenia</h6>
<h6>{{$loanList->links()}}</h6>
@foreach($loanList as $player)
{{$player}}
@endforeach

@if(Auth::user()->team !== null)
@include('transfers.forms.buy')
@include('transfers.forms.loan')
@endif

@endsection