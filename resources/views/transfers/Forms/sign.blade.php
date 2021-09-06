<form method="POST" action="{{route('transfers.store')}}">

    <div class="form-group">
        <label for="salary">Salary per week</label>
        <input type="number" class="form-control" id="salary" name="salary" max="{{$user->team->budget ?? ''}}" required>
    </div>

    <div class="form-group">
        <label for="bonus">Premia za podpis</label>
        <input type="number" class="form-control" id="bonus" name="bonus" max="{{$user->team->budget ?? ''}}" required>
    </div>

    <div class="form-group">
        <label for="role">Rola w Druzynie</label>
        <select class="form-control" id="role" name="role">
            @foreach($roles as $role)
            <option>{{$role}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
    <label for="promises">Złóz deklaracje dotyczącą celów druzyny</label>
    <select multiple class="form-control" id="goals" name="goals">
      @foreach($goals as $promise)
      <option>{{$promise}}</option>
      @endforeach
    </select>
  </div>

    <button type="submit" class="btn btn-primary">Zaproponuj Kontrakt</button>
    @method('POST')
    @csrf
</form>