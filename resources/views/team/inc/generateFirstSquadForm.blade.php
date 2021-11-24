@if($squads->count() != null)

    <div class="container">

        <div class="row">
            <form method="POST" action="{{route('team.squadGenerator')}}">
                <select class="custom-select" name="squad">
                    <option value="0" selected>Skład 1</option>
                    <option value="1">Skład 2</option>
                    <option value="2">Skład 3</option>
                </select>
                <button type="submit" class="btn btn-success" name="generate">Wybieram Skład</button>
                @csrf
            </form>
        </div>

        <div class="row">
            @php($i =1)
            @foreach($squads as $squad)
            <div class="col-lg col-sm-12 shadow-lg bg-white">
                    <h5 class="text-center m-2">Skład: {{$i}}</h5>
                    @foreach($squad as $player)
                        <p class="text-center m-1"><a href="{{route('players.show', $player->id)}}">
                                ({{$player->playerDetails->bestPosition}})
                                {{$player->name}} - {{$player->playerDetails->overall}}
                            </a></p>
                    @endforeach
                @php($i++)
            </div>
            @endforeach
        </div>

    </div>

@else
    <div class="container">
        <div class="row">
            <div class="col-12 alert alert-success" role="alert">
                <h4 class="alert-heading">Nasza klub został oficjalnie zarejestrowany, wciąż jednak brakuje w nim piłkarzy.</h4>
                <p>Twój asystent zaprosił lokalnych amatorów piłki nożnej i podzielił ich na zespoły.
                    Może zaproponujesz kontrakt któremuś z nich?<hr>
                <p class="mb-0">Po kliknięciu w przycisk będziesz miał godzinę na decyzję, z którym składem chcesz podpisać kontrakt.</p>
            </div>
        </div>

        <div class="row">
            <form method="POST" action="{{route('team.squadGenerator')}}">
                <button type="submit" class="btn btn-success" name="generate">Poznaj swoich piłkarzy</button>
                @csrf
            </form>
        </div>
    </div>
@endif