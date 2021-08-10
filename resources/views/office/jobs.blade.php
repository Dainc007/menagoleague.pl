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
                <li class="active" data-type="free-vacancies">
                    Wolne Wakaty
                </li>
                <li data-type="danger-vacancies">
                    Zagrożone Wakaty
                </li>
                <li data-type="all-offers">
                    Wszystkie
                </li>
            </div>
            <div class="offer-cards">
                <div class="offers-data" data-type="danger-vacancies">
                    <div class="data-logo">
                        <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                    </div>
                    <div class="data-club">
                        <p><b>Klub</b>: FC Name</p>
                    </div>
                    <div class="data-league">
                        <p><b>Liga</b>: 1. League</p>
                    </div>
                    <div class="data-manager">
                        <p><b>Menedżer</b>: Frank Lampard</p>
                    </div>
                    <button class="btn btn-sm btn-success">Aplikuj</button>
                </div>
                <div class="offers-data" data-type="danger-vacancies">
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
            </div>
            <div class="offers-controls">
                <span class="material-icons" id="previousOffer">undo</span>
                <span class="material-icons" id="nextOffer">redo</span>
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