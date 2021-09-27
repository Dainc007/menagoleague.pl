@extends('layouts.homeLayout')

@section('content')

    <div class="tournamentThree">
        <div class="tournamentThree-legend">
            <div class="r16">r16</div>
            <div class="qtr">qtr</div>
            <div class="semi">semi</div>
            <div class="final">final</div>
            <div class="semi">semi</div>
            <div class="qtr">qtr</div>
            <div class="r16">r16</div>
        </div>
        <div class="tournamentThree-content">
            <div class="r16">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
            </div>

            <div class="qtr">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
            </div>

            <div class="semi">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
            </div>

            <div class="final">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="team">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
                <div class="trophy"><img src="/images/trophy.svg" alt=""></div>
            </div>

            <div class="semi">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="team rev">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
            </div>

            <div class="qtr">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="team rev">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
            </div>

            <div class="r16">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="team rev">
                        <div class="img">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="" />
                        </div>

                        <div class="score">{{ rand(0, 9) }}</div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection
