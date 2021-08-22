<form method="POST" action="{{route('transfers.store')}}">

    Jednorazowa opłata za wypozyczenie:
    <input type="number" name="money" max="{{$user->team->budget ?? ''}}">

    tygodniowa opłata za wypozyczenie:
    <input type="number" name="salary" max="{{$user->team->budget ?? ''}}">

    Kwota opcjonalnego transferu definitywnego
    <input type="number" name="price" max="{{$user->team->budget ?? ''}}">

    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="buylaw" id="customSwitch1">
        <label class="custom-control-label" for="customSwitch1">Obowiązek wykupu</label>
    </div>

    <h6>zaoferuj piłkarzy wystawionych na listę transferową</h6>
    <select class="custom-select" name="players" multiple>
        @foreach($user->team->players->where('transfer_listed', true) as $player)
        <option value="{{$player->id}}">{{$player->name}}</option>
        @endforeach
    </select>

    <h6>procent od następnego transferu</h6>

    <input type="number" name="nextTransferFee" max="25">

    <button type="submit" class="btn btn-primary">Submit</button>
    @method('POST')
    @csrf
</form>