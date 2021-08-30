<div class="content">
  <section class="league-news">
    <div class="league-news-h">
      <h2>{{__('home.news.header')}}</h2>

      <div class="league-news-devices">
        <a href="#"><img src="./images/xbox-icon.svg" alt="Xbox" /></a>
        <a href="#"><img src="./images/playstation-icon.svg" alt="Playstation" /></a>
        <a href="#"><img src="./images/pc-icon.svg" alt="PC" /></a>
      </div>
    </div>

    <div class="league-news-container">
      @if($articles !== null)
      @foreach ($articles as $article)
      <div class="league-news-item" data-toggle="modal" data-target="#exampleModalLong{{$article->id}}">
        <img class="league-news-item-img" src="{{url('/images/'. rand(1,8) .'.png')}}" alt="" />
        <div class="league-news-item-shadow">
          <p class="league-news-item-p">{{$article->title}}</p>
        </div>
        

        <div class="modal fade" id="exampleModalLong{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">{{$article->title}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="{{url('/images/6.png')}}" alt="" />
                <h5>Source: <small>Sky Sports Menago 02.08.2021r</small></h5>

                <p> {{$article->content}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
    <a href="" class="btn btn-w-border btn-allNews responsive-btn-allNews">{{__('home.news.moreNews')}}</a>
  </section>

  <aside class="read-more">
    <h2>{{__('home.news.readMore')}}</h2>

    <div class="read-more-container">
      @foreach ($oldArticles as $article) <div class="read-more-item">
        <img class="read-more-item-img" src="{{url('/images/'. rand(1,8) .'.png')}}" alt="" />
        <div class="read-more-item-text">
          <p>24.07.2021</p>

          <a class="read-more-item-text-a" href="">{{$article->title}}.</a>
        </div>
      </div>
      @endforeach

    </div>
    <a href="" class="btn btn-w-border btn-allNews">{{__('home.news.moreNews')}}</a>
  </aside>
</div>