@extends('layouts.homeLayout')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($squads as $squad)
                @php
                    $avg = $squad->avg('overall');
                    $pace = $squad->avg('paceTotal');
                @endphp
                <div class="col-4 shadow bg-white">
                    <div class="row mb-3">
                        <div class="col text-center">
                            <h6> sredni ovr:{{ Str::limit($avg, 4, '') }}</h6>
                            <h6> srednie tempo:{{ Str::limit($pace, 4, '') }}</h6>
                        </div>
                    </div>

                    <div class="row mb-3">

                        @foreach ($squad as $player)
                            <div class="col-6 text-center">
                                <h4><img class="img img-fluid" style="width:30px;"
                                        src="https://fifastatic.fifaindex.com/FIFA22/players/{{ $player->id }}.png"></h4>
                                <h5>{{ $player->name }}</h5>
                                <h6>({{ $player->bestPosition }})</h6>
                                <h6>ovr: {{ $player->overall }}</h6>
                                <h6>tempo: {{ $player->paceTotal }}</h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
