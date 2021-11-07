@extends('layouts.homeLayout')

@section('content')
    <div class="container">
        @foreach ($squads as $squad)
            @php
                $avg = $squad->avg('overall');
                $pace = $squad->avg('paceTotal');
            @endphp

            <div class="row mb-3">
                <div class="col text-center">
                    <h6> sredni ovr:{{ $avg }}</h6>
                    <h6> srednie tempo:{{ $pace }}</h6>
                </div>
            </div>

            <div class="row mb-3">

                @foreach ($squad as $player)
                    <div class="col-3 text-center">
                        <h3><img class="img img-fluid" style="width:50px;"
                                src="https://fifastatic.fifaindex.com/FIFA22/players/{{ $player->id }}.png"></h3>
                        <h4>{{ $player->name }}({{ $player->bestPosition }})</h4>
                        <h5>ovr: {{ $player->overall }}</h5>
                        <h5>tempo: {{ $player->paceTotal }}</h5>
                    </div>
                @endforeach

            </div>
    </div>



    @endforeach
@endsection
