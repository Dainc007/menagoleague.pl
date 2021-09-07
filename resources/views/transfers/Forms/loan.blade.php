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

    <!-- Jeśli cancelLoan jest na ON, pokazuj cancelFee -->
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="cancelLoan" id="cancelLoan">
        <label class="custom-control-label" for="cancelLoan">Moze zostać sciągnięty wcześniej</label>
    </div>

    <div class="form-group">
        <label for="money">Opłata za skrócenie wypozyczenia:</label>
        <input type="number" name="cancelFee" id="cancelFee" placeholder="Kwota">
    </div>

    <button type="submit" class="btn btn-success bshadow">Wypozycz</button>
    @method('POST')
    @csrf
</form>
