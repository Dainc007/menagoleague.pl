<div class="transfers">
    <div class="table">
        <div class="legend">
            <div class="date">Data</div>
            <div class="from">Z</div>
            <div class="to">Do</div>
            <div class="price">Cena</div>
            <div class="type">Rodzaj</div>
        </div>

        <div class="table-content">
            @for ($i = 1; $i <= 10; $i++)
                <div class="item">
                    <div class="date">21.08.2021</div>
                    <div class="from">
                        <img src="/images/shields/6.png" alt="">
                        <p>Bayern Monachium</p>
                    </div>
                    <div class="to">
                        <img src="/images/shields/6.png" alt="">
                        <p>Bundesliga</p>
                    </div>
                    <div class="price">{{ rand(1000000, 10000000) }} $</div>
                    <div class="type">Transfer</div>
                </div>
            @endfor

            @for ($i = 1; $i <= 10; $i++)
                <div class="ritem">
                    <div class="date">21.08.2021</div>
                    <div class="from">
                        <img src="/images/shields/6.png" alt="">
                        <p>Bayern Monachium</p>
                    </div>
                    <div class="arrow"><img src="/images/arrow.svg" alt=""></div>
                    <div class="to">
                        <img src="/images/shields/6.png" alt="">
                        <p>Bundesliga</p>
                    </div>
                    <div class="price">{{ rand(1000000, 10000000) }} $</div>
                    <div class="type">Transfer</div>
                </div>
            @endfor
        </div>
    </div>
</div>
