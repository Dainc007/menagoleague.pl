@if ($user->tutorial)

@if ($user->tutorial->status == 'sent')

<form method="POST" action="{{ route('tutorial.delete', ['id' => $user->tutorial->id]) }}">
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-danger w-100 text-uppercase bshadow" value="wycofaj zaproszenie">
    </div>
    @csrf
    @method('DELETE')
</form>

@endif

@if ($user->tutorial->full_time == null)

<p class="mb-2"><b>{{ __('central.tutorial.inviteSend') }}</b>
    {{ __('central.tutorial.inviteSend2') }}
    <a href="{{route('help.tutorial')}}">{{ __('central.tutorial.expired') }}</a>
</p>

<p class="mb-2"><b>{{ __('central.tutorial.application') }}</b> {{ __('central.tutorial.application2') }} </p>


<form method="POST" action="{{ route('tutorial.store', ['id' => $user->tutorial->id]) }}">

    <div class="form-group">
        <label for="raport">{{ __('central.tutorial.raport.afterGame') }}</label>
        <input required class="form-control" type="text" name="fullTime" placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287">
    </div>

    <div class="form-group">
        <label for="raport">{{ __('central.tutorial.raport.after1stHalf') }}</label>
        <input required class="form-control" type="text" name="halfTime" placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287">
    </div>

    <div class="form-group">
        <label for="raport">{{ __('central.tutorial.raport.fair-play') }}</label>
        <input required class="form-control" type="text" name="fairPlay" placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-success w-100 text-uppercase bshadow" value="Złóz aplikacje">
    </div>
    @csrf
    @method('POST')
</form>
@else

<p class="mb-2"><b>{{ __('central.tutorial.verify') }}</b></p>
<p>{{ __('central.tutorial.result') }}
    <b><i>
            {{__('central.tutorial.results.' . $user->tutorial->status  )}}
        </i></b>
</p>
        @if($user->tutorial->status == 'rejected')
        <p> {{ __('central.tutorial.reason') }} {{$user->tutorial->message}}</p>
        @endif

@endif

@else
<p class="mb-2"><b>{{ __('central.tutorial.expired') }}</b>
    {{ __('central.tutorial.sparing') }}
    <a href="{{route('help.tutorial')}}">{{ __('central.tutorial.here') }}</a>
</p>
<p>
    <b> {{ __('central.tutorial.partner') }} <a target="_blank" href="https://discord.com/invite/w73uDUjse8">{{ __('central.tutorial.expired') }}</a>
</p></b>
<form method="POST" action="{{ route('tutorial.invite') }}">
    <div class="form-group">
        <select name="rival" id="rival" class="form-control w-100">
            @foreach ($user->getUsersByDeviceId() as $username)
            <option value="{{ $username->id }}">{{ $username->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-success w-100 text-uppercase bshadow" value="{{ __('central.tutorial.invite') }}">
    </div>
    @csrf
    @method('POST')
</form>
@endif