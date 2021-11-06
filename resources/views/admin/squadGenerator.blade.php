@extends('layouts.homeLayout')

@section('content')
    @foreach ($squads as $squad)
        @php
            $avg = $squad->avg('overall');
        @endphp

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h6> sredni ovr:{{ $avg }}</h6>
                </div>
            </div>

            <div class="row">

                @foreach ($squad as $player)
                    <div class="col-3 text-center">
                        <h3><img src="https://fifastatic.fifaindex.com/FIFA22/players/{{$player->id}}.png"></h3>
                        <h4>{{ $player->name }}</h4>
                        <h5>ovr: {{ $player->overall }}</h5>
                    </div>
                @endforeach

            </div>
        </div>



    @endforeach
@endsection
