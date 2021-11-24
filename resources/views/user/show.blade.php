@extends('layouts.homeLayout')

@section('content')

    <div class="user-info">
        <div class="user-info__general">
            <div class="general">
                <img src="/images/placeholder-person.svg" alt="">
                <div>
                    <div>
                        <p class="name">Fronikuniu</p>
                        <div class="device">
                            <img src="/images/xbox-icon.svg" alt="">
                            {{-- <img src="/images/pc-icon.svg" alt=""> --}}
                            {{-- <img src="/images/playstation-icon.svg" alt=""> --}}
                            <p class="version">Old-gen</p>
                        </div>
                    </div>

                    <p class="reg-data">Data rejestracji: 24.11.2021r.</p>
                </div>
            </div>

            <div class="team">
                <img src="/images/shield.png" alt="">
                <p class="team">Arsenal</p>
            </div>
        </div>

        <div class="user-info__full"></div>
    </div>


@endsection
