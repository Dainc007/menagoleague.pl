    <div class="col-12">
        <form method="POST" action="{{ route('vpg.storeTyper') }}">
            @csrf
            <div class="form-group">
                <label for="name">Imie i Nazwisko</label>
                <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h1>Typerzy</h1>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($typers as $key => $typer)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$typer->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


