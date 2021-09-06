@extends('layouts.app')

@section('title', 'Negocjacje Transferowe')

@section('content')

@if($action == 'sign')
@include('transfers.forms.sign')
@else
@include('transfers.forms.buy')
@include('transfers.forms.loan')
@endif

@endsection