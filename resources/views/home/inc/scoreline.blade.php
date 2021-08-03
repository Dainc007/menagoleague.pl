<section class="results-slider">
  <div class="results-slider-content">
    <div class="track">
      @if($games !== null)
      @foreach($games as $game)
      <div class="results-slider-item">
        <div class="result">
          <div class="result-team">
            <img class="result-team-icon" src="{{url('/images/shields/'. rand(1,8) .'.png')}}" alt="" />
            <span class="result-team-name">{{Str::limit($game->host->name, 3, '')}}</span>
            <span class="result-score">{{$game->host_goals}}</span>
          </div>
          <div class="result-team">
            <img class="result-team-icon" src="{{url('/images/shields/'. rand(1,8) .'.png')}}" alt="" />
            <span class="result-team-name">{{Str::limit($game->visitor->name, 3, '')}}</span>
            <span class="result-score">{{$game->visitor_goals}}</span>
          </div>
          <hr />
          <p class="result-date">{{$game->date}}</p>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>