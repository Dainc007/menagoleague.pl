<section class="office-rivals">
    {{ session()->get('message') ?? '' }}

    <h2 class="office-title">
        Odwieczni rywale
    </h2>
    <div class="rivals-statistics">
        @for ($i=0;$i<5;$i++)
            <div class="rival-info">
                <p class="rival-name">Rywal
                </p>
                <div class="rival-form">
                    @for($z=0;$z<5;$z++)
                        @php 
                            $randomNumber = rand(-1,1);
                        @endphp
                            @if ($randomNumber == -1)
                                <div class='bg-danger text-white'>P</div>
                            @elseif ($randomNumber == 0)
                                <div class='bg-warning text-white'>R</div>
                            @else
                                <div class='bg-success text-white'>W</div>
                            @endif
                    @endfor
                </div>
            </div>
        @endfor
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
    @foreach($user->rivals as $userRvial)
    {{$userRvial->name}}
    @endforeach

    
</section>