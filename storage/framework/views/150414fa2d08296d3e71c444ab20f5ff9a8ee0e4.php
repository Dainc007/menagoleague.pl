<div class="rank-card">
    <div class="rank-form">
        <p>Miejsca 1-20 w rankingu <span>Lorem, ipsum.</span></p>
        <form action="">
            <div class="form-group">
                <select class="form-control" id="rank-type" name="rank-type">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <option>Lorem, ipsum.<?php echo e($i); ?></option>
                    <?php endfor; ?>
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
            <?php for($i = 1; $i <= 20; $i++): ?>
                <div class="rank-table-item">
                    <div class="place">#<?php echo e($i); ?></div>
                    <div class="player">Gracz</div>
                    <div class="team">Druzyna</div>
                    <div class="gamerTag">GamerTag</div>
                    <div class="points"><?php echo e(rand(1000, 9999)); ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="rank-pagination"></div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views//help/inc/ranking/rank.blade.php ENDPATH**/ ?>