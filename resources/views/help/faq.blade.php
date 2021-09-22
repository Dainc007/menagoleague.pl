@extends('layouts.homeLayout')

@section('content')

    <div class="ranking-content">
        <h1>Ranking</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="rank-tab" data-toggle="tab" href="#rank" role="tab" aria-controls="rank"
                    aria-selected="true">Gracze</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="rank-teams-tab" data-toggle="tab" href="#rank-teams" role="tab"
                    aria-controls="rank-teams" aria-selected="false">Drużyny</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="rank-players-tab" data-toggle="tab" href="#rank-players" role="tab"
                    aria-controls="rank-players" aria-selected="false">Piłkarze</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="rank" role="tabpanel" aria-labelledby="rank-tab">
                @include('.help.inc.ranking.rank')
            </div>
            <div class="tab-pane fade" id="rank-teams" role="tabpanel" aria-labelledby="rank-teams-tab">
                @include('.help.inc.ranking.rankTeams')
            </div>
            <div class="tab-pane fade" id="rank-players" role="tabpanel" aria-labelledby="rank-players-tab">
                @include('.help.inc.ranking.rankPlayers')
            </div>
        </div>
    </div>
@endsection
