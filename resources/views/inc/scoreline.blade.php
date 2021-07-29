
<div class="container">
    <section class="results-slider">
      <div class="results-slider-content">
        <div class="track">
            @for ($i=1;$i<=20;$i++) 
            <div class="results-slider-item">
                <div class="result">
                <div class="result-team">
                    <img class="result-team-icon" src="https://picsum.photos/25/25" alt="" />
                    <span class="result-team-name">T01</span>
                    <span class="result-score"><?php echo rand(0,9)?></span>
                </div>
                <div class="result-team">
                    <img class="result-team-icon" src="https://picsum.photos/25/25" alt="" />
                    <span class="result-team-name">T02</span>
                    <span class="result-score"><?php echo rand(0,9)?></span>
                </div>
                <hr />
                <p class="result-date">Today, 3 PM</p>
                </div>
            </div>
            @endfor
        </div>
      </div>
    </section>
  </div>