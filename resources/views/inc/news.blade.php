<div class="container">
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
            <img class="league-news-item-img" src="https://picsum.photos/400/200" alt="" />
            <div class="league-news-item-shadow"></div>
            <p class="league-news-item-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam.</p>
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
            <img class="read-more-item-img" src="https://picsum.photos/130/80" alt="" />
            <div class="read-more-item-text">
              <div class="read-more-item-text-h">
                <h3>League1</h3>
                <h3>24.07.2021</h3>
              </div>
              <p class="read-more-item-text-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, fugit.</p>
            </div>
          </div>
          @endfor
          
        </div>
        <a href="" class="btn btn-w-border btn-allNews">ALL NEWS</a>
      </aside>
    </div>
  </div>