@extends('layouts.homeLayout')

@section('content')

    <div class="user-info">
        <div class="user-info__general">
            <div class="general">
                <img src="/images/placeholder-person.svg" alt="">
                <div>
                    <div>
                        <p class="name">{{$user->name}}</p>
                        <div class="device">
                            <img src="/images/xbox-icon.svg" alt="">
                            {{-- <img src="/images/pc-icon.svg" alt=""> --}}
                            {{-- <img src="/images/playstation-icon.svg" alt=""> --}}
                            <p class="version">{{$user->version}}</p>
                        </div>
                    </div>

                    <p class="reg-data">{{$user->created_at}}</p>
                </div>
            </div>

            <div class="team">
                @if($user->team)
                    <a href="{{route('teams.show', $user->team->id)}}">
                        <img src="{{ env('TEAM_SRC') }}{{ $user->team->sofifa_id ?? '111592' }}.png">
                        <p class="team">{{$user->team->name}}</p>
                    </a>
                    @endif
            </div>
        </div>

        <div class="user-info__full"></div>
    </div>


@endsection
