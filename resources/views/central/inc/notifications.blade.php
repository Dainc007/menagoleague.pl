<section class="central-notifications">
    {{-- Tab notifications menu --}}
    <ul class="nav nav-tabs headers-switch" id="myTab" role="tablist">
        {{-- <li class="nav-item" role="presentation">
            <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab"
                aria-controls="notifications" aria-selected="true">
                <span class="material-icons"> radio_button_unchecked </span>
            </a>
        </li> --}}
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="last-transfers-tab" data-toggle="tab" href="#last-transfers" role="tab"
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
        {{-- <div class="central-notifications-content tab-pane fade active show" id="notifications" role="tabpanel"
            aria-labelledby="notifications-tab">
            <h2>{{ __('central.notifications.title') }}</h2>

            <div class="central-notifications-content">
                <span class="material-icons">description </span>
                @if ($user->getNumOfNotifications() > 0)
                    <h3>
                        <a href="{{ route('office.messages')  }}">
                        {{ __('central.notifications.count', ['number' => $user->getNumOfNotifications()])}}
                    </a>
                    </h3>  <p>{{Str::limit($user->getLastNotification()->title, 30)}}</p>
                    @else
                    <h3>{{ __('central.notifications.none') }}</h3>
                @endif

            </div>
        </div> --}}

        {{-- Last transfers --}}
        <div class="central-notifications-content tab-pane fade active show" id="last-transfers" role="tabpanel"
            aria-labelledby="last-transfers-tab">
            <div class="header-w-tab">
                <h2>{{ __('central.lastTransfers') }}</h2>
            </div>

            <div class="notifications-content">
                @if (!$transfers)
                    @foreach ($transfers as $transfer)
                        <div class="notifications-content-item">
                            <img src="{{ env('TEAM_SRC') }}{{ $transfer->from->sofifa_id ?? '111592' }}.png">
                            <div>
                                <p>{{ $transfer->fee }} <i>M$</i></p>
                                <img src="{{ url('/images/arrow.svg') }}" alt="">
                                <p> {{ $transfer->player->name }} </p>
                            </div>
                            <img src="{{ env('TEAM_SRC') }}{{ $player->to->sofifa_id ?? '111592' }}.png">
                        </div>
                    @endforeach
                @else
                    <div class="notifications-content-placeholder">
                        <p>Chwilowo brak danych do wyświetlenia.</p>
                    </div>
                @endif

            </div>
        </div>

        {{-- Big transfers --}}
        <div class="central-notifications-content tab-pane fade" id="big-transfers" role="tabpanel"
            aria-labelledby="big-transfers-tab">
            <div class="header-w-tab">
                <h2>{{ __('central.bigTransfers') }}</h2>
            </div>

            <div class="notifications-content">
                @if (!$biggestTransfers)
                    @foreach ($biggestTransfers as $transfer)
                        <div class="notifications-content-item">
                            <img src="{{ env('TEAM_SRC') }}{{ $transfer->from->sofifa_id ?? '111592' }}.png">
                            <div>
                                <p>{{ $transfer->fee }} <i>M$</i></p>
                                <img src="{{ url('/images/arrow.svg') }}" alt="">
                                <p> {{ $transfer->player->name }} </p>
                            </div>
                            <img src="{{ env('TEAM_SRC') }}{{ $player->to->sofifa_id ?? '111592' }}.png">
                        </div>
                    @endforeach
                @else
                    <div class="notifications-content-placeholder">
                        <p>Chwilowo brak danych do wyświetlenia.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
