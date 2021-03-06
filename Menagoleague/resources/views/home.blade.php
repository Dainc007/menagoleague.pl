@extends('layouts.app')

@section('content')

<style>
.user-info-wrapper{
    padding: calc(1.5vw + 10px);
    display: flex;
}
.user-info{
    display: flex;
    background-color:white;

    padding:8px;
     
    }
    img{
            width:70px;
            height:70px;
        }
    .team-and-name{
        font-size: 18px;
        padding: 0 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: flex-start;
    }


.user-morale{
    display: flex;
    justify-content: center;
    padding: 0 5px;
    align-items: center;
    font-size: 2.6rem;
    background-color: gray;
    color:white;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<!--             <div class="bg-dark d-flex" style="width:400px; height:120px;">
                <div class="bg-success my-auto" style="width:100px; height:100px;">
                    <span><img class="img-fluid" src="{{ asset('storage/shields/5.png') }}"></span>
                </div>
                <div class="d-flex flex-column my-auto">
                    <div class="bg-primary d-flex" style="width:100px; height:50px;"><span class="align-middle">OK</span> </div>
                    <div class="bg-warning" style="width:100px; height:50px;"> <span>Manager</span> </div>
                </div>
                <div class="bg-success my-auto" style="width:100px; height:100px;"> </div>
            </div> -->

            <div class="user-info-wrapper">
                <div class="user-info">
                    <div class="user-info logo">
                        <img src="{{ asset('storage/shields/5.png') }}" alt="herb">
                    </div>
                    <div class="user-info__team-and-name">
                        <span class="user-name">
                            SnaggyDainc </span>
                        <span class="team-name">
                            Arsenal </span>
                    </div>
                </div>
                <div class="user-morale" title="ogólno rozumiany poziom zadowolenia panujący w klubie">
                    100 </div>

                <div class="user-rivals">
                    <span class="rival"></span>
                </div>
            </div>

            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection