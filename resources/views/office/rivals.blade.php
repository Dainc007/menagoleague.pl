<section class="office-rivals">
    <h2 class="office-title">{{ __('office.rivals.title') }}</h2>
    <div class="rivals-statistics">
        @foreach ($user->rivals as $userRvial)
            <div class="rival-info">
                <p class="rival-name">{{ $userRvial->name }}
                </p>
                <div class="rival-form">
                    <div class='bg-danger text-white'>P</div>
                    <div class='bg-warning text-white'>R</div>
                    <div class='bg-success text-white'>W</div>
                </div>
            </div>

        @endforeach
    </div>

    <form action="{{ route('rival.invite') }}" method="POST">
        <select name="rivalId" class="custom-select">
            @foreach ($user->getUsersByDeviceId() as $username)
                <option value="{{ $username->id }}">{{ $username->name }}</option>
            @endforeach
        </select>

        <input class="btn btn-sm btn-info bshadow" type="submit" value="{{ __('office.rivals.invite') }}">
        @csrf
        @method('POST')
    </form>
    
    @if ($user->rivalsInvitations && $user->rivalsInvitations->count() > 0)
        <h6 class="carrer-invites">{{ __('office.rivals.invitations') }}</h6>
        @foreach ($user->rivalsInvitations as $invitation)
            
            <form action="{{ route('rival.respond', ['id' => $invitation->pivot->id]) }}" method="POST">
               <p> {{$invitation->name}}
                <button class="btn-sm btn-success" name="status"
                    value="accepted">{{ __('office.rivals.accept') }}</button>
                <button class="btn-sm btn-danger" name="status"
                    value="rejected">{{ __('office.rivals.reject') }}</button></p>
                @csrf
                @method('POST')
            </form>
        @endforeach
    @endif

</section>
