<div class="card-header justify-content-around d-flex">
    <form method="POST" action="{{route('account.update')}}">
        @csrf
        <div class="row form-group">
            <input class="form-control" type="text" name="discord" id="discord" placeholder="Discord:{{$personal_data->discord}}">
        </div>
        <div class="row form-group">
            <input class="form-control" type="text" name="facebook" id="facebook" placeholder="Facebook:{{$personal_data->facebook}}">
        </div>
        <input hidden type="number" name="id" value="{{$personal_data->id}}">
        <div class="row form-group">
            <input class="btn-primary btn mx-auto w-100" type="submit" value="edytuj dane kontaktowe">
        </div>

        <div class="row form-group">

            @if (Route::has('password.request'))
            <a class="btn btn-success mx-auto w-100" href="{{ route('password.request') }}">
                Resetuj Hasło
            </a>
            @endif
        </div>

    </form>
</div>