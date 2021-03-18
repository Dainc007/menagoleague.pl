@extends('layouts.app')

@section('title', 'Biuro')

@section('content')
<p>Dostępne oferty pracy</p>
@foreach($jobOffers as $row)
{{$row->name}}
{{$row->league->country}}
{{$row->league->level}}
@endforeach

<p>Dostępne oferty pracy</p>
@foreach($jobOffers as $row)
{{$row->name}}
{{$row->league->country}}
{{$row->league->level}}
@endforeach

@endsection