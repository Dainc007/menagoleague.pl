<form method="POST" action="{{ route('tutorial.invite') }}">
    <div class="form-group">
        <label for="rival">Zaproś do rozegrania Samouczka</label>
        <select name="rival" id="rival" class="form-control w-50">
            @foreach(Auth::user()->getUsersByDeviceId() as $username)
            <option value="{{$username->id}}">{{$username->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger" value="Zaproś">
    </div>
    @csrf
    @method('POST')
</form>

<h6>Rozegrałeś Mecz Sparingowy? Świetnie! Uzupełnij wniosek o przyznanie licencji trenerskiej!</h6>

<form method="POST" action="{{ route('tutorial.store', ['id' => 1]) }}">
    <div class="form-group">
        <label for="raport">Raport Pomeczowy</label>
        <input required class="form-control" type="text" name="fullTime" placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287">
    </div>

    <div class="form-group">
        <label for="raport">Raport Po Pierwszej Połowie</label>
        <input required class="form-control" type="text" name="halfTime" placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287">
    </div>

    <div class="form-group">
        <label for="raport">Raport Zawodników (Dowód uczciwej gry)</label>
        <input required class="form-control" type="text" name="fairPlay" placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287">
    </div>

    <select class="custom-select custom-select-sm">
        @if(Auth::user()->tutorials)
        @foreach(Auth::user()->tutorials as $row)
        <option value="{$row->id}">{{$row->getName($row->rival_id)}}</option>
        <!-- Wyrzuca mi tylko jednego rywala... -->
        @endforeach
        @endif
    </select>

    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger" value="Zaproś">
    </div>
    @csrf
    @method('POST')
</form>