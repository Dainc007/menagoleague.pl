{{-- {{$user->name}}
{{$user->email}}
{{$user->device}}
@foreach ($user->teams as $team)
{{$team->name}}
{{$team->pivot->contract_sign_at}} - {{$team->pivot->contract_expires}}
@endforeach --}}

@extends('layouts.homeLayout')

@section('content')



@endsection
