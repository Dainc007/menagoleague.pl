{{ session()->get('message') ?? '' }}

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

<form method="POST" action="">
    <div class="form-group">
        <label for="raport">Załaduj link do raportu</label>
    <input class="form-control" type="text" name="raport" placeholder="np: https://gamerdvr.com/gamer/snaggydainc/video/134342287">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger" value="Zaproś">
    </div>
@csrf
@method('POST')
</form>