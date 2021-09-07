<form method="POST" action="{{ route('transfers.store') }}" class="loan">

    <div class="form-group">
        <label for="money">Jednorazowa opłata za wypozyczenie:</label>
        <input type="number" name="money" id="money" placeholder="Kwota">
    </div>

    <div class="form-group">
        <label for="salary">Tygodniowa opłata za wypozyczenie:</label>
        <input type="number" name="salary" id="salary" placeholder="Tygodniowka">
    </div>

    <div class="form-group">
        <label for="salary">Kwota opcjonalnego transferu definitywnego:</label>
        <input type="number" name="transferFee" id="transferFee" placeholder="$$$">
    </div>

    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="buylaw" id="buylaw">
        <label class="custom-control-label" for="buylaw">Obowiązek wykupu</label>
    </div>

    <button type="submit" class="btn btn-success bshadow">Wypozycz</button>
    @method('POST')
    @csrf
</form>
