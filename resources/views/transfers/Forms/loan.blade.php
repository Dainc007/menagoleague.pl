<form method="POST" action="{{ route('transfers.store', $id) }}" class="loan">

    <div class="form-group">
        <label for="fee">Jednorazowa opłata za wypozyczenie:</label>
        <input type="number" name="fee" id="fee" placeholder="Kwota" required>
    </div>

    <div class="form-group">
        <label for="weekFee">Tygodniowa opłata za wypozyczenie:</label>
        <input type="number" name="weekFee" id="weekFee" placeholder="Tygodniowka">
    </div>

    <div class="form-group">
        <label for="transferClause">Kwota opcjonalnego transferu definitywnego:</label>
        <input type="number" name="transferClause" id="transferClause" placeholder="$$$">
    </div>

    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="buylaw" id="buylaw">
        <label class="custom-control-label" for="buylaw">Obowiązek wykupu</label>
    </div>

    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="cancelLoan" id="cancelLoan">
        <label class="custom-control-label" for="cancelLoan">Moze zostać sciągnięty wcześniej</label>
    </div>

    <div class="form-group loanExtraOptions">
        <label for="cancelFee">Opłata za skrócenie wypozyczenia:</label>
        <input type="number" name="cancelFee" id="cancelFee" placeholder="Kwota">
    </div>

    <button type="submit" name="type" value="loan" class="btn btn-success bshadow">Wypozycz</button>
    @method('POST')
    @csrf
</form>
