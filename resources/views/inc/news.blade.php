
<div class="content">
  <section class="league-news">
    <div class="league-news-h">
      <h2>LEAGUE NEWS</h2>

      <div class="league-news-devices">
        <a href=""><img src="./images/xbox-icon.svg" alt="" /></a>
        <a href=""><img src="./images/playstation-icon.svg" alt="" /></a>
        <a href=""><img src="./images/pc-icon.svg" alt="" /></a>
      </div>
    </div>

    <div class="league-news-container">
      @for ($i=1;$i<=4;$i++)
      <div class="league-news-item">
        <img class="league-news-item-img" src="{{url('/images/6.png')}}" alt="" />
        <div class="league-news-item-shadow"></div>
        <a href="" class="league-news-item-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam.</a>
      </div>
      @endfor
    </div>
    <a href="" class="btn btn-w-border btn-allNews responsive-btn-allNews">ALL NEWS</a>
  </section>

  <aside class="read-more">
    <h2>READ MORE</h2>

    <div class="read-more-container">
      @for ($i=1;$i<=5;$i++)
        <div class="read-more-item">
          <img class="read-more-item-img" src="{{url('/images/8.png')}}" alt="" />
          <div class="read-more-item-text">
            <p>24.07.2021</p>

            <a class="read-more-item-text-a" href="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, fugit.</a>
          </div>
        </div>
      @endfor
      
    </div>
    <a href="" class="btn btn-w-border btn-allNews">ALL NEWS</a>
  </aside>
</div>
