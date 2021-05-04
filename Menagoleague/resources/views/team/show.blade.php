Druzyna
{{$team->name}}
{{$team->device_id}}

Manager
{{$team->user->name}}

Rozgrywki
{{$team->league->region}}{{$team->league->level}}

<p>
    Aktualny sezon:
    {{$team->league->competitions}}
</p>

Skład
@foreach($team->players as $player)
{{$player->name}}
@endforeach