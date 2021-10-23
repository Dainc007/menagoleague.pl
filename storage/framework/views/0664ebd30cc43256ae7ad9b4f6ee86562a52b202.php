<div class="season-teamOTW">
    <h2>Top team</h2>

    <div class="selects">
        <div class="league">
            
            <select name="League" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option value="value<?php echo e($i); ?>">League <?php echo e($i); ?></option>
                <?php endfor; ?>
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
        <?php for($p = 1; $p <= 11; $p++): ?>
            <div class="player">
                <div class="player-info">
                    <img src="/images/tshirt.svg" alt="">
                    <p class="name">Arnold Metzger</p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/season/inc/teamOTW.blade.php ENDPATH**/ ?>