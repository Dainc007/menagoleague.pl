<section class="office-jobs">
    <h2 class="office-title">Oferty pracy</h2>
    <div class="jobs-offers">
        {{-- Jeżeli nie ma ofert --}}
        {{-- <div class="offers-none">
            <p>Obecnie nie ma dostępnych ofert pracy</p>
            <button class="btn btn-sm btn-secondary">Złóz wniosek o stworzenie nowej druzyny</button>
        </div> --}}
        {{-- Jeżeli są oferty --}}
        <div class="offers-details">
            <div class="offers-buttons">
                <li class="active" data-type="free-vacancies" data-number="0">
                    Wolne Wakaty
                </li>
                <li data-type="danger-vacancies" data-number="1">
                    Zagrożone Wakaty
                </li>
                <li data-type="all-offers" data-number="2">
                    Wszystkie
                </li>
            </div>
            <div class="offer-cards">
                <div class="offers-jobs active" data-type="free-vacancies">
                    <div class="offers-data active">
                        <div class="data-logo">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        </div>
                        <div class="data-club">
                            <p><b>Klub</b>: FC Bayern Monachium</p>
                        </div>
                        <div class="data-league">
                            <p><b>Liga</b>: Bundesliga</p>
                        </div>
                        <div class="data-manager">
                            <p><b>Menedżer</b>: Pep Guardiola</p>
                        </div>
                        <button class="btn btn-sm btn-success">Aplikuj</button>
                    </div>
                    <div class="offers-data">
                        <div class="data-logo">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        </div>
                        <div class="data-club">
                            <p><b>Klub</b>: Liverpool</p>
                        </div>
                        <div class="data-league">
                            <p><b>Liga</b>: Premier League</p>
                        </div>
                        <div class="data-manager">
                            <p><b>Menedżer</b>: Mauricio Pochettino</p>
                        </div>
                        <button class="btn btn-sm btn-success">Aplikuj</button>
                    </div>
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="0">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="0">redo</button>
                    </div>
                </div>  
                <div class="offers-jobs" data-type="danger-vacancies">
                    <div class="offers-data active">
                        <div class="data-logo">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        </div>
                        <div class="data-club">
                            <p><b>Klub</b>: Borussia Dortmund</p>
                        </div>
                        <div class="data-league">
                            <p><b>Liga</b>: Bundesliga</p>
                        </div>
                        <div class="data-manager">
                            <p><b>Menedżer</b>: Thomas Tuchel</p>
                        </div>
                        <button class="btn btn-sm btn-success">Aplikuj</button>
                    </div>
                    <div class="offers-data">
                        <div class="data-logo">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        </div>
                        <div class="data-club">
                            <p><b>Klub</b>: Legia Warszawa</p>
                        </div>
                        <div class="data-league">
                            <p><b>Liga</b>: Ekstraklasa</p>
                        </div>
                        <div class="data-manager">
                            <p><b>Menedżer</b>: Stanisław Czerczesow</p>
                        </div>
                        <button class="btn btn-sm btn-success">Aplikuj</button>
                    </div>
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="1">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="1">redo</button>
                    </div>
                </div>  
                <div class="offers-jobs" data-type="all-offers">
                    <div class="offers-data active">
                        <div class="data-logo">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        </div>
                        <div class="data-club">
                            <p><b>Klub</b>: AS Monaco</p>
                        </div>
                        <div class="data-league">
                            <p><b>Liga</b>: Francuska</p>
                        </div>
                        <div class="data-manager">
                            <p><b>Menedżer</b>: Frank Lampard</p>
                        </div>
                        <button class="btn btn-sm btn-success">Aplikuj</button>
                    </div>
                    <div class="offers-data">
                        <div class="data-logo">
                            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        </div>
                        <div class="data-club">
                            <p><b>Klub</b>: FC Name 1</p>
                        </div>
                        <div class="data-league">
                            <p><b>Liga</b>: Premier League</p>
                        </div>
                        <div class="data-manager">
                            <p><b>Menedżer</b>: Mauricio Pochettino</p>
                        </div>
                        <button class="btn btn-sm btn-success">Aplikuj</button>
                    </div>
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="2">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="2">redo</button>
                    </div>
                </div>      
            </div>
            
        </div>
    </div>
    
</section>
{{-- @if(($jobOffers != null))
        <div class="d-flex justify-content-center">
            {{ $jobOffers->links()}}
        </div>
    
    @foreach($jobOffers as $team)    
        <p><a href="{{route('teams.show',['team' => $team])}}">{{$team->name}}</a>{{$team->device_id}}
            @if($team->league)
            {{$team->league->region}}
            {{$team->league->level}}
            @endif
            @if($user->isManager())
            <form method="POST" action="{{ route('team.application', ['id' => $team->id]) }}">
            <input type="submit" class="btn btn-success btn-sm" value="Aplikuj">
            @csrf
            @method('POST')
            </form>
        </p>
    @else
    Zdobądź licencję trenerską by aplikować na to stanowisko</p>
    @endif
    @endforeach
    
    @else
    <h6>Obecnie nie ma dostępnych ofert pracy</h6>
    <button class="btn btn-sm btn-danger">Złóz wniosek o stworzenie nowej druzyny</button>
    @endif --}}