@extends('layouts.app')

@section('title', 'Negocjacje Transferowe')

@section('content')

    <div class="transfer-actions-content">
        @include('transfers.forms.transfers-actions')
    </div>

@endsection
