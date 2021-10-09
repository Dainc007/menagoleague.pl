@extends('layouts.homeLayout')

@section('content')

    {{-- Preview leagueWH - delete when create new component --}}
    <div class="leagueWinnersHistory">
        <h1>Premier League</h1>

        <div class="leagueWinnersHistory__table">
            <div class="leagueWinnersHistory__table-legend">
                <div class="season">Season</div>
                <div class="winner">Winner</div>
            </div>
            <div class="leagueWinnersHistory__table-content">
                @for ($i = 0; $i <= 10; $i++)
                    <div class="item">
                        <div class="season">
                            <p>09.10.21r - 10.10.21r</p>
                        </div>
                        <div class="winner">
                            <img src="/images/shields/{{ rand(1, 8) }}.png" alt="">
                            <p>Manchester City</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection
