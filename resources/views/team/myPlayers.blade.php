@if(!empty($user->team->players))

@foreach($user->team->players as $player)
<p> <a href="{{route('players.show', [ 'player' => $player ])}}">
        {{$player->name}}
        {{$player->position}}
        {{$player->overall}}
    </a>
    <button class="btn-danger">Rozwiąz kontrakt</button>
    <button class="btn-success">Przedłuz umowę</button>
    <button class="btn-primary">Rozmawiaj</button>
    <button class="btn-warning">Wystaw na listę transferową</button>
    <button class="btn-secondary">Statystyki</button>

</p>
@endforeach

@else
<p>W Twojej druzynie nie ma obecnie zadnego piłkarza</p>

@endif