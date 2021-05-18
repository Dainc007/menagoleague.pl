{{ session()->get('message') ?? '' }}
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
<h6>Rywale</h6>
@foreach($user->rivals as $userRvial)
{{$userRvial->name}}
@endforeach

<h6>Otrzymane Zaproszenia</h6>
@foreach($user->rivalsInvitations as $invitation)
<form action="{{route('rival.respond', ['id' => $invitation->pivot->id]) }}" method="POST">
    <button name="status" value="accepted">Akceptuj</button>
    <button name="status" value="rejected">Odrzuć</button>
    @csrf
    @method('POST')
</form>
@endforeach