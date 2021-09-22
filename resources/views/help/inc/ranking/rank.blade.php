<div class="rank-card">
    <div class="rank-form">
        <p>Miejsca 1-20 w rankingu <span>Lorem, ipsum.</span></p>
        <form action="">
            <div class="form-group">
                <select class="form-control" id="rank-type" name="rank-type">
                    @for ($i = 1; $i <= 10; $i++)
                        <option>Lorem, ipsum.{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <button type="submit" name="action" value="sign" class="btn bshadow material-icons">
                search
            </button>
        </form>

    </div>

    <div class="rank-content">
        <div class="rank-table-legend">
            <div class="place">#</div>
            <div class="player">Gracz</div>
            <div class="team">Druzyna</div>
            <div class="gamerTag">GamerTag</div>
            <div class="points">Pts</div>
        </div>
        <div class="rank-table">
            @for ($i = 1; $i <= 20; $i++)
                <div class="rank-table-item">
                    <div class="place">#{{ $i }}</div>
                    <div class="player">Gracz</div>
                    <div class="team">Druzyna</div>
                    <div class="gamerTag">GamerTag</div>
                    <div class="points">{{ rand(1000, 9999) }}</div>
                </div>
            @endfor
        </div>

        <div class="rank-pagination"></div>
    </div>
</div>
