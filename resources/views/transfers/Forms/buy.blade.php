<form method="POST" action="{{ route('transfers.store') }}" class="buy">

    <div class="form-group">
        <label for="money">Kwota Transferu:</label>
        <input type="number" name="transferFee" id="transferFee" placeholder="Kwota" required>
    </div>

    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="extraOptions" id="extraOptions">
        <label class="custom-control-label" for="extraOptions">Pokaz Dodatkowe Opcje</label>
    </div>

    <div class="buyExtraOptions" style="display: none">
        <div class="form-group">
            <label for="extraPlayer">Zaoferuj piłkarza wystawionego na listę transferową:</label>
            <select class="custom-select" name="extraPlayer" id="extraPlayer">
                <option selected>Wybierz Zawodnika</option>
                @foreach ($user->team->players->where('transfer_listed', true) as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nextTransferFee">Zaoferuj procent od kolejnego transferu:</label>
            <select class="custom-select" name="nextTransferFee" id="nextTransferFee">
                @foreach ($nextFees as $fee)
                    <option value="{{ $fee }}">{{ $fee }} %</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" name="action" value="buy" class="btn btn-success bshadow">Kup</button>
    @method('POST')
    @csrf
</form>
