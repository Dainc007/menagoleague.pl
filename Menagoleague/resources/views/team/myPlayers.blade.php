@if(!empty(auth()->user()->team->players))

@foreach(auth()->user()->team->players as $player)
<p>{{$player->name}}
{{$player->position}}
{{$player->overall}}
</p>

@endforeach

@else
<p>W Twojej druzynie nie ma obecnie zadnego piłkarza</p>

@endif