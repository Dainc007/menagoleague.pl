@extends('layouts.app')

@section('content')
Lista aktywnych rozgrywek
@foreach($competitions as $competition)
<a href="/competitions/{{$competition->id}}">
    <h6>{{$competition->league_id}}</h6>
    <p>{{$competition->start}} - {{$competition->end}}</p>
    <small>{{$competition->id}}</small>
</a>
@endforeach

@endsection