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
            <iframe src="https://discord.com/widget?id=785081091710517268&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
    </div>
</div>