<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="groupStage-tab" data-toggle="tab" href="#groupStage" role="tab"
            aria-controls="groupStage" aria-selected="true">Group Stage</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="roundOf16-tab" data-toggle="tab" href="#roundOf16" role="tab"
            aria-controls="roundOf16" aria-selected="false">Round of 16</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="groupStage" role="tabpanel" aria-labelledby="groupStage-tab">
        @include('help.tournaments.inc.groupView')
    </div>
    <div class="tab-pane fade" id="roundOf16" role="tabpanel" aria-labelledby="roundOf16-tab">
        @include('help.tournaments.inc.internationalRoundOf16')
    </div>
</div>
