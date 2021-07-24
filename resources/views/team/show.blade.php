Druzyna
{{$team->name}}
{{$team->device_id}}

Manager:
@if($team->user) {{$team->user->name}} @else('Brak') @endif

Rozgrywki
@if($team->league) {{$team->league->region}}{{$team->league->level}}
<p>
    Aktualny sezon:
    {{$team->league->competitions}}
</p>
@endif

Skład
@foreach($team->players as $player)
{{$player->name}}
@endforeach