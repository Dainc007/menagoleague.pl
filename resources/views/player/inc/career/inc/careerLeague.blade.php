<div class="career">
    <div class="table">
        <div class="legend">
            <div class="season">Sezon</div>
            <div class="club">Drużyna</div>
            <div class="region">Rozgrywki</div>
            <div class="played-matches">
                <img src="/images/tshirt.svg" alt="">
            </div>
            <div class="goals">
                <img src="/images/goal-icon.svg" alt="">
            </div>
            <div class="asists">
                <img src="/images/asist-icon.svg" alt="">
            </div>
            <div class="yellow-cards">
                <img src="/images/yellow-card.svg" alt="">
            </div>
            <div class="red-cards">
                <img src="/images/red-card.svg" alt="">
            </div>
        </div>

        <div class="table-content">
            @for ($i = 1; $i <= 10; $i++)
                <div class="item">
                    <div class="season">2021 2022</div>
                    <div class="club">
                        <img src="/images/shields/6.png" alt="">
                        Bayern Monachium
                    </div>
                    <div class="region">
                        <img src="/images/shields/6.png" alt="">
                        Bundesliga
                    </div>
                    <div class="played-matches">{{ rand(0, 100) }}'</div>
                    <div class="goals">{{ rand(0, 100) }}</div>
                    <div class="asists">{{ rand(0, 100) }}</div>
                    <div class="yellow-cards">{{ rand(0, 100) }}</div>
                    <div class="red-cards">{{ rand(0, 100) }}</div>
                </div>
            @endfor
        </div>
    </div>
</div>
