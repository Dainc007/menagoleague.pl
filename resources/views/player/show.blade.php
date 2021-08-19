{{$player->name}}
{{$player->device}}
{{$player->nationality}}
{{$player->position}}
{{$player->overall}}
{{$player->age}}

@if($player->team)
{{$player->wage}}
{{$player->contract_lenght}}
{{$player->team->name}}
@endif

Kontrakty:
@foreach($player->teams as $team)
<p>{{$team->name}} {{$team->pivot->contract_sign_at}} - {{$team->pivot->contract_expires}}</p>
@endforeach