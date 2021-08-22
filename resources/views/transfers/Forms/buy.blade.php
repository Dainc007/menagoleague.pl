<form method="POST" action="{{route('transfers.store')}}">

    <input type="number" name="money" max="{{$user->team->budget ?? ''}}" required>

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