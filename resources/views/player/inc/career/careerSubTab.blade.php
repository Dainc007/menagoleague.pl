<div class="careerSubTab">
    <ul class="nav nav-tabs sub-tab" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all"
                aria-selected="true">Wszystko</a>
        </li>

        {{-- <li class="nav-item" role="presentation">
            <a class="nav-link" id="league-tab" data-toggle="tab" href="#league" role="tab" aria-controls="league"
                aria-selected="false">Liga</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link" id="nationalCups-tab" data-toggle="tab" href="#nationalCups" role="tab"
                aria-controls="nationalCups" aria-selected="false">Puchary krajowe</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link" id="internationalCups-tab" data-toggle="tab" href="#internationalCups" role="tab"
                aria-controls="internationalCups" aria-selected="false">Puchary międzynarodowe</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link" id="nationalTeam-tab" data-toggle="tab" href="#nationalTeam" role="tab"
                aria-controls="nationalTeam" aria-selected="false">Drużyna narodowa</a>
        </li> --}}
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            @include('player.inc.career.inc.careerAll')
        </div>

        {{-- <div class="tab-pane fade" id="league" role="tabpanel" aria-labelledby="league-tab">
            @include('player.inc.career.inc.careerLeague')
        </div>

        <div class="tab-pane fade" id="nationalCups" role="tabpanel" aria-labelledby="nationalCups-tab">
            @include('player.inc.career.inc.careerNationalCups')
        </div>

        <div class="tab-pane fade" id="internationalCups" role="tabpanel" aria-labelledby="internationalCups-tab">
            @include('player.inc.career.inc.careerInternationalCups')
        </div>

        <div class="tab-pane fade" id="nationalTeam" role="tabpanel" aria-labelledby="nationalTeam-tab">
            @include('player.inc.career.inc.careerNationalTeam')
        </div> --}}
    </div>
</div>
