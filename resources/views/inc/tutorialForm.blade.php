@if($user->tutorial)

@if($user->tutorial->status == 'sent')

<form method="POST" action="{{ route('tutorial.delete', ['id' => $user->tutorial->id]) }}">
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger" value="wycofaj zaproszenie">
    </div>
    @csrf
    @method('DELETE')
</form>

@endif

@if($user->tutorial->full_time == null)

<h5>Wysłałeś zaproszenie rywalowi. Teraz musisz rozegrać mecz sparingowy zgodnie z wytycznymi opisanymi TUTAJ </h5>
<h6>Rozegrałeś mecz? Świetnie! Teraz mozesz wypełnić wniosek o przyznanie licencji trenerskiej!</h6>


<form method="POST" action="{{ route('tutorial.store', ['id' => $user->tutorial->id]) }}">

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

    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger" value="Złóz aplikacje">
    </div>
    @csrf
    @method('POST')
</form>
@else

<h6>Twoja aplikacja jest w trakcie weryfikacji.</h6>
<h6>Wynik: {{$user->tutorial->status}}</h6>

@endif

@else
<h6> Jeśli nie masz jeszcze sparing-partnera, znajdziesz go tutaj: LINK</h6>
<form method="POST" action="{{ route('tutorial.invite') }}">
    <div class="form-group">
        <label for="rival">Zaproś do rozegrania Samouczka</label>
        <select name="rival" id="rival" class="form-control w-50">
            @foreach($user->getUsersByDeviceId() as $username)
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
@endif









