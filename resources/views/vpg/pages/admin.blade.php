@extends('layouts.basic')

@section('content')
    <div class="container">
           <div class="row">
               <div class="col">
                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="nav-item" role="presentation">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Typ</a>
                       </li>
                       <li class="nav-item" role="presentation">
                           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Uzytkownik</a>
                       </li>
                   </ul>
               </div>
           </div>

        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @include('vpg.forms.addTyperPrediction')
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @include('vpg.forms.addTyper')
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
