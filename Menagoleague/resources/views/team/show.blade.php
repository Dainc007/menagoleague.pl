Druzyna
{{$team->name}}
{{$team->device_id}}

Manager
{{$team->user->name}}

Rozgrywki
{{$team->league->region}}{{$team->league->level}}

Skład
@foreach($team->players as $player)
{{$player->name}}
@endforeach
