<div class="players">
    <ul class="nav nav-tabs main-tab" id="myTab" role="tablist" style="display: flex;">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="lastMatches-tab" data-toggle="tab" href="#lastMatches" role="tab"
                aria-controls="lastMatches" aria-selected="true">Ostatnie mecze</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career"
                aria-selected="false">Kariera</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="transfers-tab" data-toggle="tab" href="#transfers" role="tab"
                aria-controls="transfers" aria-selected="false">Transfery</a>
        </li>

        <img src="/images/menu.svg" alt="" class="responsive-tab-menu">
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="lastMatches" role="tabpanel" aria-labelledby="lastMatches-tab">
            @include('player.inc.lastMatches')
        </div>

        <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
            @include('player.inc.career.careerSubTab')
        </div>

        <div class="tab-pane fade" id="transfers" role="tabpanel" aria-labelledby="transfers-tab">
            @include('player.inc.transfers')
        </div>
    </div>
</div>
