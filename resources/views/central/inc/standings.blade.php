<section class="central-standings">
    {{-- Tab standings menu --}}
    <ul class="nav nav-tabs headers-switch" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="standings-tab" data-toggle="tab" href="#standings" role="tab"
                aria-controls="standings" aria-selected="true">
                <span class="material-icons radio-active"> radio_button_unchecked </span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="top-scorers-tab" data-toggle="tab" href="#top-scorers" role="tab"
                aria-controls="top-scorers" aria-selected="false">
                <span class="material-icons radio-active"> radio_button_unchecked</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="top-asists-tab" data-toggle="tab" href="#top-asists" role="tab"
                aria-controls="top-asists" aria-selected="false">
                <span class="material-icons radio-active"> radio_button_unchecked</span>
            </a>
        </li>
    </ul>


    <div class="tab-content h-100" id="myTabContent">

        {{-- Standings --}}
        <div class="central-standings-content tab-pane fade active show" id="standings" role="tabpanel"
            aria-labelledby="standings-tab">
            <h2>STANDINGS</h2>

            <div class="central-standings-info-text">
                <div>
                    <div style="display: none">Icons made by <a href="https://www.flaticon.com/authors/dighital"
                            title="Dighital">Dighital</a> from <a href="https://www.flaticon.com/"
                            title="Flaticon">www.flaticon.com</a></div>
                    <img src="{{ url('/images/games-played-icon.svg') }}" alt="Games played icon" title="Games played"
                        class="mx-auto">
                </div>
                <div>
                    <img src="{{ url('/images/points-icon.svg') }}" alt="Points scored icon" title="Points scored"
                        class="mx-auto">
                </div>
            </div>
            <div class="standings-content">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="standings-item">
                        <p class="standings-item-id">{{ $i }}.</p>
                        <img class="standings-item-img" src="https://picsum.photos/30/30" alt="" />
                        <p class="standings-item-name">Lorem, ipsum.</p>
                        <p class="standings-item-scorePLD">{{ rand(0, 20) }}</p>
                        <p class="standings-item-scorePTS">{{ rand(0, 20) }}</p>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Scorers --}}
        <div class="central-standings-content tab-pane fade" id="top-scorers" role="tabpanel"
            aria-labelledby="top-scorers-tab">
            <h2>TOP SCORERS</h2>

            <div class="central-standings-info-text">
                <div>
                    <img src="{{ url('/images/goal-icon.svg') }}" alt="Goal icon" title="Goals">
                </div>
            </div>
            <div class="standings-content">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="standings-item">
                        <p class="standings-item-id">{{ $i }}.</p>
                        <img class="standings-item-img" src="https://picsum.photos/30/30" alt="" />
                        <p class="standings-item-name">Lorem, ipsum.</p>
                        <p class="standings-item-scorePLD">{{ rand(0, 20) }}</p>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Assists --}}
        <div class="central-standings-content tab-pane fade" id="top-asists" role="tabpanel"
            aria-labelledby="top-asists-tab">
            <h2>TOP ASSISTS</h2>

            <div class="central-standings-info-text">
                <div>
                    <img src="{{ url('/images/asist-icon.svg') }}" alt="Assist icon" title="Assists">
                </div>
            </div>
            <div class="standings-content">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="standings-item">
                        <p class="standings-item-id">{{ $i }}.</p>
                        <img class="standings-item-img" src="https://picsum.photos/30/30" alt="" />
                        <p class="standings-item-name">Lorem, ipsum.</p>
                        <p class="standings-item-scorePLD">{{ rand(0, 20) }}</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>



    {{-- <div class="central-standings-info-text">
        <p>PLD</p>
        <p>PTS</p>
    </div>
    <div class="central-standings-content">
        @for ($i = 1; $i <= 10; $i++)
            <div class="standings-item">
                <p class="standings-item-id">{{ $i }}</p>
                <img class="standings-item-img" src="https://picsum.photos/30/30" alt="" />
                <p class="standings-item-name">Lorem, ipsum.</p>
                <p class="standings-item-scorePLD">{{ rand(0, 20) }}</p>
                <p class="standings-item-scorePTS">{{ rand(0, 20) }}</p>
            </div>
        @endfor
    </div> --}}
</section>
