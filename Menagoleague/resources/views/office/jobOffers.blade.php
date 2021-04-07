@if(!empty($jobOffers))
<h6>Dostępne oferty pracy</h6>

@foreach($jobOffers as $row)

<p>{{$row->name}}{{$row->device}}
{{$row->league->region}}
{{$row->league->level}}<button class="btn btn-sm btn-danger">Aplikuj</button></p>

@endforeach

@else
<h6>Obecnie nie ma dostępnych ofert pracy</h6>
<button class="btn btn-sm btn-danger">Złóz wniosek o stworzenie nowej druzyny</button>
@endif