@extends('layouts.app')

@section('title', 'Twój Skład')

@section('content')

@if ($user->team)
<div class="squad-content">
    @include('team.inc.teamManagement')

</div>
@endif

@if ($user->isManager())
<div class="alert alert-info" role="alert">
    <h6> {{__('team.noJob')}} <a href="{{route('help.tutorial') }}">
    </h6>
  </div>

@else
<h6>{{__('team.noLicence')}}
     <a href="{{route('help.tutorial') }}">{{__('team.here')}}</a></h6>
@endif



@endsection