@extends('layouts.app')

@section('title', 'Centrala')

@section('content')

<style>
    /* .gray-room-bg {
  min-height: 100vh;
  width: 100%;
  background-image: url("../pictures/grayRoom.png");
  background-repeat: no-repeat;
  background-size: 100% 100%;
} */
    .user-info__logo img {
        max-width: 80px;
        background-color: rgba(218, 221, 251, 0.5);
    }

    .user-info__team-and-name {
        font-size: 18px;
        -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
        justify-content: space-evenly;
        /* color */
        color: #5079A3;
        background-color: rgba(218, 221, 251, 0.5);
    }

    .user-morale {
        font-size: 2.6rem;
        border-radius: 0px 50px 50px 0px;

        /* color */
        background-color: rgba(157, 158, 175, 0.5);
        color: #FFFFFF;
    }

    .home-nav {
        background-color: #5079A3;
    }
    
    .main-nav__item.active {
        background-color: lightblue;
        border-bottom: 2px solid #EE6677;
    }

    .main-nav__item.active:hover span {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
</style>

<div class="container-fluid">
    @include('inc.userShield')
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-3">
                <div class="card-header">
                    @include('inc.homeNav')
                </div>

                <div class="card-body">
                    @if($personal_data->team)
                    @foreach($personal_data->team->players as $player)
                    <p> {{$player->name}}
                        {{$player->overall}}
                        {{$player->position}}
                        {{$player->age}}
                        {{$player->nationality}}
                    </p>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection