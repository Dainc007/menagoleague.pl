<!-- BRAKUJE OBSŁUGI SYTACJI< W KTÓREJ USER NIE MA LICENCJI TRENERA -->

<section class="office-jobs">
    <h2 class="office-title">{{__('office.job.title')}}</h2>
    <div class="jobs-offers">
        @if($jobOffers == null)
        <div class="offers-none">
            <p>{{__('office.job.noJob')}}</p>
            <button class="btn btn-sm btn-success">{{__('office.job.createTeam')}}</button>
        </div>
        @else
        <div class="offers-details">
            <div class="offers-buttons">
                <li class="active" data-type="free-vacancies" data-number="0">
                    {{__('office.job.tabs.open')}}
                </li>
                <li data-type="danger-vacancies" data-number="1">
                    {{__('office.job.tabs.thread')}}
                </li>
                <li data-type="all-offers" data-number="2">
                    {{__('office.job.tabs.all')}}
                </li>
            </div>


            <div class="offer-cards">
                <div class="offers-jobs active" data-type="free-vacancies">
                    @php($i = 1)
                    @foreach($jobOffers as $job)
                    <div class="offers-data @if($i == 1) active @endif">
                        <a href="{{route('teams.show',['team' => $job])}}">
                            <div class="data-logo">
                                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                            </div>
                            <div class="data-club">
                                <p> {{$job->name}}</p>
                            </div>
                        </a>
                        <div class="data-league">
                            <p><b>{{__('office.job.league')}}</b>:@if($job->league !== null) {{$job->league->region}}@endif</p>
                        </div>
                        <div class="data-manager">
                            <p><b>{{__('office.job.manager')}}</b>:@if($job->user !== null) {{$job->user->name}}@endif</p>
                        </div>
                        <form method="POST" action="{{ route('team.application', ['id' => $job->id]) }}">
                            <input type="submit" class="btn btn-sm btn-success" value="{{__('office.job.apply')}}">
                            @csrf
                            @method('POST')
                        </form>
                    </div>
                    @php($i++)
                    @endforeach
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="0">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="0">redo</button>
                    </div>
                </div>

                <div class="offers-jobs" data-type="danger-vacancies">
                    @php($i=0)
                    @foreach($jobOffers as $job)
                    <div class="offers-data  @if($i == 1) active @endif">
                        <a href="{{route('teams.show',['team' => $job])}}">
                            <div class="data-logo">
                                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                            </div>
                            <div class="data-club">
                                <p>{{$job->name}}</p>
                            </div>
                        </a>
                        <div class="data-league">
                            <p><b>{{__('office.job.league')}}</b>:@if($job->league !== null) {{$job->league->region}}@endif</p>
                        </div>
                        <div class="data-manager">
                            <p><b>{{__('office.job.manager')}}</b>:@if($job->user !== null) {{$job->user->name}}@endif</p>
                        </div>

                        <form method="POST" action="{{ route('team.application', ['id' => $job->id]) }}">
                            <input type="submit" class="btn btn-sm btn-success" value="{{__('office.job.apply')}}">
                            @csrf
                            @method('POST')
                        </form>
                    </div>
                    @php($i++)
                    @endforeach
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="1">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="1">redo</button>
                    </div>
                </div>

                <div class="offers-jobs" data-type="all-offers">
                    @php($i = 0)
                    @foreach($jobOffers as $job)
                    <div class="offers-data  @if($i == 1) active @endif">
                        <a href="{{route('teams.show',['team' => $job])}}">
                            <div class="data-logo">
                                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                            </div>
                            <div class="data-club">
                                <p>{{$job->name}}</p>
                            </div>
                        </a>
                        <div class="data-league">
                            <p><b>{{__('office.job.league')}}</b>:@if($job->league !== null) {{$job->league->region}}@endif</p>
                        </div>
                        <div class="data-manager">
                            <p><b>{{__('office.job.manager')}}</b>:@if($job->user !== null) {{$job->user->name}}@endif</p>
                        </div>

                        <form method="POST" action="{{ route('team.application', ['id' => $job->id]) }}">
                            <input type="submit" class="btn btn-sm btn-success" value="{{__('office.job.apply')}}">
                            @csrf
                            @method('POST')
                        </form>
                    </div>
                    @php($i++)
                    @endforeach
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="2">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="2">redo</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif
</section>