<div class="container">
    <div class="row">
        <div class="col-lg-8 bg-dark">
            <img src="{{ asset('storage/shields/20.png') }}">
            @foreach($articles as $article)
            <h6 class="text-center">{{$article->title}}</h6>
            <p class="text-center">{{$article->content}}</p>
            <small class="text-center">{{$article->device}}</small>
            <p class="text-center">{{$article->created_at}}</p>
            @endforeach
        </div>

        <div class="col-lg-4 bg-success">
            <img src="{{ asset('storage/shields/20.png') }}">
        </div>
    </div>
</div>