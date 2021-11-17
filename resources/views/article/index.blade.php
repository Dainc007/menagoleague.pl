@extends('layouts.homeLayout')

@section('content')

    <div class="container-fluid shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row my-3 py-3 mx-1 px-1">
            @foreach($articles as $article)
                <div class="col-sm-3">
                    <div class="card mb-3 pb-3" style="max-height: 400px;">
                        <img style="max-height: 150px;" class="card-img-top" @if($article->id == 5)
                        src="{{url('/images/managers.webp')}}"
                             @else
                             src="{{url('/images/'. rand(1,8) .'.webp')}}"
                             @endif
                             alt="">
                        <div class="card-body overflow-auto">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text pb-3">{{$article->content}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
