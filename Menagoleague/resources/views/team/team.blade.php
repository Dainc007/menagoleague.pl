@extends('layouts.homeLayout')

@section('title', 'Twój Skład')

@section('content')
<p>Twój skład</p>
@if(auth()->user()->team()->players() > 0)
@foreach(auth()->user()->team()->players() as $player)
{{$row->name}}
{{$row->league->country}}
{{$row->league->level}}
@endforeach
@endif
@endsection