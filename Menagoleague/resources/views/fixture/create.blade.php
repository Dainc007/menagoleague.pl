<form action="{{ route('fixture.create', ['competition' => $competition]) }}" method="GET">
    <button type="submit" class="btn btn-success">Generuj Terminarz</button>
    @csrf
    @method('GET')
</form>