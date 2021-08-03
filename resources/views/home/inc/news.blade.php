
<div class="content">
  <section class="league-news">
    <div class="league-news-h">
      <h2>LEAGUE NEWS</h2>

      <div class="league-news-devices">
        <a href="#"><img src="./images/xbox-icon.svg" alt="" /></a>
        <a href="#"><img src="./images/playstation-icon.svg" alt="" /></a>
        <a href="#"><img src="./images/pc-icon.svg" alt="" /></a>
      </div>
    </div>

    <div class="league-news-container">
      @for ($i=1;$i<=4;$i++)
        <div class="league-news-item" data-toggle="modal" data-target="#leagueNews{{$i}}">
          <img class="league-news-item-img" src="{{url('/images/6.png')}}" alt="" />
          <div class="league-news-item-shadow"></div>
          <p class="league-news-item-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam.</p>
        </div>
        <div class="modal fade" id="leagueNews{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="{{url('/images/6.png')}}" alt=""/>
                <h5>Author ・<small> 02.08.2021r</small></h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur impedit molestias est magni excepturi molestiae ipsam fugiat fuga officiis cum! Eum omnis autem id cumque eius deserunt recusandae vero eos officia debitis doloribus dignissimos expedita beatae voluptates quos, mollitia architecto magni nam nulla ad quam, esse vitae dolor aliquam! Dolore et corporis in eveniet harum recusandae qui veritatis incidunt illum, nulla eligendi velit expedita magni unde aspernatur. Perspiciatis dolore at quae. Soluta nemo doloremque minima suscipit impedit possimus commodi culpa recusandae totam a, voluptatum aspernatur at ipsum quas iste laudantium. Dicta sequi facere quia blanditiis quis. Animi praesentium expedita voluptatibus repudiandae eos odit quasi ipsam ipsum similique deserunt, illo fuga mollitia eaque eligendi. Error assumenda vel aut velit quos! Maxime inventore adipisci ab sit, excepturi dolorem fuga corporis eligendi molestias, vel repellendus quia fugit accusamus. Commodi, quis optio animi assumenda tenetur rem odio delectus beatae. Dolor non nemo accusantium? Aperiam!
                </p>
              </div>
            </div>
          </div>
        </div>
      @endfor
    </div>
    <a href="" class="btn btn-w-border btn-allNews responsive-btn-allNews">ALL NEWS</a>
  </section>

  <aside class="read-more">
    <h2>READ MORE</h2>

    <div class="read-more-container">
      @for ($i=1;$i<=5;$i++)
        <div class="read-more-item" {{--data-toggle="modal" data-target="#readMore{{$i}}"--}}>
          <img class="read-more-item-img" src="{{url('/images/8.png')}}" alt="" />
          <div class="read-more-item-text">
            <p>24.07.2021</p>
            <a class="read-more-item-text-a">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, fugit.</a>
          </div>
        </div>

        {{-- <div class="modal fade" id="readMore{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="{{url('/images/8.png')}}" alt=""/>
                <h5>Author ・<small> 02.08.2021r</small></h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, fugit.</p>
              </div>
            </div>
          </div>
        </div> --}}
      @endfor
      
    </div>
    <a href="" class="btn btn-w-border btn-allNews">ALL NEWS</a>
  </aside>
</div>
