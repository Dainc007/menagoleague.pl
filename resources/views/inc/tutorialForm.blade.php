@if ($user->tutorial)

@if ($user->tutorial->status == 'sent')

<form method="POST" action="{{ route('tutorial.delete', ['id' => $user->tutorial->id]) }}">
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger w-100 text-uppercase bshadow" value="wycofaj zaproszenie">
    </div>
    @csrf
    @method('DELETE')
</form>

@endif

@if ($user->tutorial->full_time == null)

<p class="mb-2"><b>Brawo Szefie! Przekazałem Twoje zaproszenie rywalowi.</b>
     Teraz musi je przyjąć, by następnie rozegrać mecz sparingowy zgodnie z wytycznymi
        opisanymi <a href="{{route('help.tutorial')}}">TUTAJ</a></p>

<p class="mb-2"><b>Przygotowałem dla Ciebie wniosek o przyznanie licencji trenerskiej.</b> Wypełnimy go, gdy już rozegrasz mecz.</p>


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
        <input type="submit" class="btn btn-sm btn-success w-100 text-uppercase bshadow" value="Złóz aplikacje">
    </div>
    @csrf
    @method('POST')
</form>
@else

<p class="mb-2"><b>Twoja aplikacja jest w trakcie weryfikacji.</b></p>
<p>Wynik: <b><i>{{ $user->tutorial->status }}</i></b></p>

@endif

@else
<p class="mb-2"><b>Szefie, przykro mi to mówić, ale Twoja licencja wygasła i należałoby ją odnowić.</b>
    W tym celu powinniśmy zorganizować sparing. Poprowadzisz zespół i pokażesz wszystkim, że
    nadal pamiętasz jak to się robi! Nie przejmuj się papierologią, od czego masz mnie. Prosze.
    Szczegóły zdobycia licencji znajdziesz <a href="{{route('help.tutorial')}}">TUTAJ</a></p><p>
    <b>Jeśli nie masz jeszcze sparing-partnera, znajdziesz go <a target="_blank" href="https://discord.com/invite/w73uDUjse8">TUTAJ</a></p></b>
<form method="POST" action="{{ route('tutorial.invite') }}">
    <div class="form-group">
        <label for="rival">Zaproś do rozegrania Samouczka</label>
        <select name="rival" id="rival" class="form-control w-100">
            @foreach ($user->getUsersByDeviceId() as $username)
            <option value="{{ $username->id }}">{{ $username->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-success w-100 text-uppercase bshadow" value="Zaproś">
    </div>
    @csrf
    @method('POST')
</form>
@endif