@extends('layouts.homeLayout')

@section('content')

    <div class="tournamentThree">
        <div class="tournamentThree-content">
            <div class="r16">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>

            <div class="qtr">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>

            <div class="semi">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>

            <div class="final">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>

            <div class="semi">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="team rev">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>

            <div class="qtr">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="team rev">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>

            <div class="r16">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="team rev">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 20) }}</div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection
