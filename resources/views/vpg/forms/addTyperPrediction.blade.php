<div class="col-12">

    <form method="POST" action="{{ route('vpg.storePrediction') }}">
        @csrf
        <select class="custom-select" name="typerId">
            <option value="0" selected>Wybierz Uzytkownika</option>
            @foreach($typers as $typer)
                <option value="{{$typer->id}}">{{$typer->name}}</option>
            @endforeach
        </select>

        @for($i = 1; $i <= 7; $i++)
            <div class="row">
                <span>{{$i}} Gospodarze</span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prediction[{{$i}}]" id="inlineRadio1" value="h">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prediction[{{$i}}]" id="inlineRadio2" value="d">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prediction[{{$i}}]" id="inlineRadio3" value="v">
                    <label class="form-check-label" for="inlineRadio3">3</label>
                </div>

                <span>Goście</span>
            </div>
        @endfor

            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name="trueResult" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Dodaj odpowiedź i przelicz punkty</label>
            </div>

        <button type="submit" class="btn btn-primary col-12">Submit</button>
    </form>
</div>
