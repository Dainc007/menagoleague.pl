<div class="season-teamOTW">
    <h2>Top team</h2>
    <div class="selects">
        <div class="league">
            <select name="League" id="">

                <option>League</option>

            </select>
        </div>

        <div class="team">
            <select name="Team" id="">
                <option value="">Team Of The Week</option>
                <option value="" disabled>Team Of The Season</option>
            </select>
        </div>
    </div>

    <div class="formation">
        <img src="/images/soccer-glass.jpg" alt="">

        @for ($p = 1; $p <= 11; $p++)
            <div class="player">
                <div class="player-info">
                    <img src="/images/tshirt.svg" alt="">
                    <p class="name">Arnold Metzger</p>
                </div>
            </div>
        @endfor

    </div>
</div>
