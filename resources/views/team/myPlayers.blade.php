@foreach(team->players as $player)
<p> <a href="{{route('players.show', [ 'player' => $player ])}}">
        {{$player->name}}
        {{$player->position}}
        {{$player->overall}}
    </a>
    <button class="btn-success">Przedłuz umowę</button>
    <button class="btn-info">Mianuj Kapitanem</button>
    <button class="btn-secondary">Statystyki</button>
    <button class="btn-primary">Rozmawiaj</button>
    <button class="btn-warning">Wystaw na listę transferową</button>
    <button class="btn-danger">Rozwiąz kontrakt</button>
</p>
@endforeach
