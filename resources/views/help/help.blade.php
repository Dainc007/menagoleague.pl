@extends('layouts.homeLayout')

@section('content')

    <div class="help-content">
        @include('help.inc.help.navHelp')

        @include('help.inc.help.contentHelp')
    </div>

@endsection
