@extends('layouts.app')

@section('title', 'Twój Skład')

@section('content')

@if($user->team)
@include('team.myPlayers')
@endif

@if($user->isManager())
<h6>Obecnie nie jesteś zatrudniony. Przejąć klub lub złozyc wniosek o zalozenie nowego mozesz TUTAJ</h6>
@else
<h6>Nie jesteś licencjonowanym trenerem. O tym jak zdobyć licencję i przejąć druzyne przeczytasz TUTAJ</h6>
@endif

@endsection