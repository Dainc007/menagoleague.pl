Region: {{$league->region}}
Type: {{$league->type}}
level: {{$league->level}}

@foreach($league->teams as $team)
{{$team->name}}
@endforeach

<p>
Historia Rozgrywek {{$league->competitions}}
</p>
