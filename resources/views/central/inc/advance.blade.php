<section class="central-advance">
    <div class="advance-headers">
        <h2>ADVANCE</h2>
        <span>MAR 2021</span>
    </div>

    <div class="advance-callendar">
        @for ($i = 26; $i < 31; $i++)
            <div class="advance-callendar-day">
                <p>Mon <span>20:45</span></p>
                <div>
                    <p>{{ $i }}</p>
                    <img src="https://picsum.photos/60/60" alt="" />
                </div>

                <span class="material-icons">swap_horiz</span>
            </div>
        @endfor
    </div>
</section>
