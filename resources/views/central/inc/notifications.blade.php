<section class="central-notifications">
    {{-- Tab notifications menu --}}
    <ul class="nav nav-tabs headers-switch" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab"
                aria-controls="notifications" aria-selected="true">
                <span class="material-icons"> radio_button_unchecked </span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="last-transfers-tab" data-toggle="tab" href="#last-transfers" role="tab"
                aria-controls="last-transfers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="big-transfers-tab" data-toggle="tab" href="#big-transfers" role="tab"
                aria-controls="big-transfers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
    </ul>


    <div class="tab-content notifications-content" id="myTabContent">

        {{-- Notifications --}}
        <div class="central-notifications-content tab-pane fade active show" id="notifications" role="tabpanel"
            aria-labelledby="notifications-tab">
            <h2>NOTIFICATIONS</h2>

            <div class="central-notifications-content">
                <span class="material-icons">description </span>
                <h3>Lorem, ipsum.</h3>
                <p>[INFO] Lorem ipsum dolor sit.</p>
            </div>
        </div>

        {{-- Last transfers --}}
        <div class="central-notifications-content tab-pane fade" id="last-transfers" role="tabpanel"
            aria-labelledby="last-transfers-tab">
            <h2>LAST TRANSFERS</h2>

            <div class="notifications-content">
                @for ($i = 0; $i < 15; $i++)
                    <div class="notifications-content-item">
                        <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="">
                        <div>
                            <p>{{ rand(1000, 100000) }} <i>M$</i></p>
                            <img src="{{ url('/images/arrow.svg') }}" alt="">
                            <p>J. Guilavogui </p>
                        </div>
                        <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="">
                    </div>
                @endfor
            </div>
        </div>

        {{-- Big transfers --}}
        <div class="central-notifications-content tab-pane fade" id="big-transfers" role="tabpanel"
            aria-labelledby="big-transfers-tab">
            <h2>BIG TRANSFERS</h2>

            <div class="notifications-content">
                @for ($i = 0; $i < 15; $i++)
                    <div class="notifications-content-item">
                        <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="">
                        <div>
                            <p>{{ rand(1000000, 100000000) }} <i>M$</i></p>
                            <img src="{{ url('/images/arrow.svg') }}" alt="">
                            <p>J. Guilavogui </p>
                        </div>
                        <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}" alt="">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
