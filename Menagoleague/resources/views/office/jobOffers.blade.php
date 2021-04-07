@if(!empty($jobOffers))
<h6>Dostępne oferty pracy</h6>

@foreach($jobOffers as $team)

<p><a href="{{route('teams.show',['team' => $team])}}">{{$team->name}}</a>{{$team->device}}
{{$team->league->region}}
{{$team->league->level}}<button class="btn btn-sm btn-danger">Aplikuj</button></p>

@endforeach

@else
<h6>Obecnie nie ma dostępnych ofert pracy</h6>
<button class="btn btn-sm btn-danger">Złóz wniosek o stworzenie nowej druzyny</button>
@endif