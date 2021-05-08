<form action="{{ route('fixture.store', ['competition' => $competition]) }}" method="POST">

    <input type="date" name="start" value="{{today()->format('Y-m-d')}}">

    <button type="submit" class="btn btn-success">Generuj Terminarz</button>
    @csrf
    @method('POST')
</form>