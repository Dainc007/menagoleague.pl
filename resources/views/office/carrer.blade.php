<section class="office-carrer">
    <h2 class="office-title">Kariera</h2>
    <div class="carrer-summary">
        <div class="summary-statistics">
            <p>
                W = 10
            </p>
            <p>
                L = 1
            </p>
            <p>
                R = 4
            </p>
        </div>
        <div class="summary-awards">
            <p>
                Trofea = 3
            </p>
            <p>
                Nagrody indywidualne = 0
            </p>
            <p>
                Wynagrodzenie = 18 235$/tyg.
            </p>
        </div>
    </div>
    <form action="{{route('rival.invite') }}" method="POST">
        <select name="rivalId" class="custom-select">
            @foreach($user->getUsersByDeviceId() as $username)
            <option value="{{$username->id}}">{{$username->name}}</option>
            @endforeach
        </select>

        <input class="btn btn-sm btn-danger" type="submit" value="Zaproponuj rywalizację">
        @csrf
        @method('POST')
    </form>

    <h6 class="carrer-invites">Otrzymane Zaproszenia</h6>
    @foreach($user->rivalsInvitations as $invitation)
    <form action="{{route('rival.respond', ['id' => $invitation->pivot->id]) }}" method="POST">
        <button name="status" value="accepted">Akceptuj</button>
        <button name="status" value="rejected">Odrzuć</button>
        @csrf
        @method('POST')
    </form>
    @endforeach
</section>