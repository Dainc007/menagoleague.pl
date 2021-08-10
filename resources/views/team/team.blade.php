@extends('layouts.app')

@section('title', 'Twój Skład')

@section('content')

@if ($user->team)
<div class="squad-content">
    @include('team.inc.teamManagement')

</div>
@endif

@if ($user->isManager())
<h6>Obecnie nie jesteś zatrudniony. Przejąć klub lub złozyc wniosek o zalozenie nowego mozesz <a href="">TUTAJ</a>
</h6>
@else
<h6>Nie jesteś licencjonowanym trenerem. O tym jak zdobyć licencję i przejąć druzyne przeczytasz <a href="">TUTAJ</a></h6>
@endif



@endsection