@extends('layouts.app')

@section('title', config('app.name', 'Menago League'))


@section('content')

@if(auth()->user()->team)
@foreach(auth()->user()->team->players as $player)
<p> {{$player->name}}
    {{$player->overall}}
    {{$player->position}}
    {{$player->age}}
    {{$player->nationality}}
</p>
@endforeach
{{auth()->user()->team->league}}
{{auth()->user()->roles}}
{{auth()->user()->team->competitions}}

@endif

@endsection