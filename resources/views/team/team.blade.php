@extends('layouts.app')

@section('title', 'Twój Skład')

@section('content')

@if ($user->team)
<div class="squad-content">
    @include('team.inc.teamManagement')

</div>
@endif

@if ($user->isManager())
<h6> {{__('team.noJob')}} <a href="{{route('help.tutorial') }}">{{__('team.here')}}</a>
</h6>
@else
<h6>{{__('team.noLicence')}}
     <a href="{{route('help.tutorial') }}">{{__('team.here')}}</a></h6>
@endif



@endsection