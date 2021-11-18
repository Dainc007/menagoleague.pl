<div class="content">
    <section class="league-news">
        <div class="league-news-h">
            <h2>{{ __('home.news.header') }}</h2>

            <div class="league-news-devices">
                <a class="device" href=""><img src="./images/xbox-icon.svg" alt="Xbox" /></a>
                <a class="device" href=""><img src="./images/playstation-icon.svg" alt="Playstation" /></a>
                <a class="device" href=""><img src="./images/pc-icon.svg" alt="PC" /></a>
            </div>
        </div>

        <div class="league-news-container">
            @if ($articles !== null)
                @foreach ($articles as $article)
                    <div class="league-news-item" data-toggle="modal"
                        data-target="#exampleModalLong{{ $article->id }}">
                        <img class="league-news-item-img" @if ($article->id == 5)
                        src="{{ url('/images/managers.webp') }}"
                    @else src="{{ url('/images/' . rand(1, 8) . '.webp') }}"
                @endif
                alt="" />

                {{-- Tutaj wyswietlanie ikonek dla urządzeń --}}
                <div class="device-img"><img src="./images/xbox-icon.svg" alt="Xbox" /></div>

                <div class="league-news-item-shadow">
                    <p class="league-news-item-p">{{ $article->title }}</p>
                </div>


                <div class="modal fade" id="exampleModalLong{{ $article->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">{{ $article->title }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img @if ($article->id == 5)
                                src="{{ url('/images/managers.png') }}"
                            @else
                                src="{{ url('/images/' . rand(1, 8) . '.webp') }}"
                                @endif alt="" />
                                <p> {{ $article->content }}</p>
                                <h5 class="pt-3 pb-1 mb-1"><span> <small> Source: Sky Sports Menago </small></span>
                                    <small>{{ $article->created_at->format('d-m-Y') }}</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        @endif
</div>
<a href="" class="btn btn-w-border btn-allNews responsive-btn-allNews">{{ __('home.news.moreNews') }}</a>
</section>

<aside class="read-more">
    <h2>{{ __('home.news.readMore') }}</h2>

    <div class="read-more-container">
        @foreach ($oldArticles as $article)
            <div class="read-more-item">
                <img class="read-more-item-img" src="{{ url('/images/' . rand(1, 8) . '.webp') }}" alt="" />
                <div class="read-more-item-text">
                    <p>
                        {{ $article->created_at->format('d-m-Y') }}
                        {{-- Tutaj wyswietlanie ikonek dla urządzeń --}}
                        <img src="./images/xbox-icon.svg" alt="Xbox" />
                    </p>

                    <a class="read-more-item-text-a" href="">{{ $article->title }}.</a>
                </div>
            </div>
        @endforeach

    </div>
    <a href="{{ route('article.index') }}" class="btn btn-w-border btn-allNews">{{ __('home.news.moreNews') }}</a>
</aside>
</div>
