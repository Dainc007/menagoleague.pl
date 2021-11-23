@extends('layouts.homeLayout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($squads as $squad)
                @php
                    $avg  = $squad->avg('overall');
                    $pace = $squad->where('bestPostition', '!=', 'GK')->avg('paceTotal');
                    $age  = $squad->avg('age');
                @endphp
                <div class="col-12 shadow bg-white px-3">
                    <div class="row mb-3 mx-auto px-auto">
                        <div class="col text-center">
                            <h6> sredni ovr:{{ Str::limit($avg, 4, '') }}</h6>
                            <h6> srednie tempo:{{ Str::limit($pace, 4, '') }}</h6>
                            <h6> srednia wieku:{{ Str::limit($age, 4, '') }}</h6>
                        </div>
                    </div>

                    <div class="row mb-3 mx-auto px-auto">
                        @php($x=0)
                        @foreach ($squad as $player)
                            @php($x++)
                            @if($player->bestPosition == 'GK')
                                @php($i=12)
                                @elseif($player->bestPosition == 'ST')
                                @php($i=6)
                                @else
                                @php($i=3)
                            @endif
                            @if($x > 10)
                                @php($i=4)
                            @endif
                            <div class="col-lg-{{$i}} text-center">
                                <a href="https://www.fifaindex.com/player/{{$player->id}}" target="_blank">
                                    <h4><img class="img img-fluid my-3" style="width:30px;"
                                             src="https://fifastatic.fifaindex.com/FIFA22/players/{{ $player->id }}.png"></h4>
                                    <h5>{{ $player->name }}</h5>
                                    <h6>({{ $player->bestPosition }})</h6>
                                    <h6>ovr: {{ $player->overall }}</h6>
                                    <h6>tempo: {{ $player->paceTotal }}</h6>
                                    <h6>lat: {{ $player->age }}</h6>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
