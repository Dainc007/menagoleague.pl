@extends('layouts.app')

@section('title', 'Twój Skład')

@section('content')

    @if ($user->team)
        <div class="squad-content">
            @include('team.inc.teamManagement')

        </div>
    @endif

    @if (!$user->isManager())
        <div class="alert alert-info" role="alert">
            <h6>{{ __('team.noLicence') }}
                <a href="{{ route('help.tutorial') }}">{{ __('team.here') }}</a>
            </h6>
        </div>
    @endif

    @if (!$user->team)
        <div class="alert alert-info" role="alert">
            <h6> {{ __('team.noJob') }} <a href="{{ route('help.tutorial') }}"></a>
            </h6>
        </div>
    @endif



@endsection
