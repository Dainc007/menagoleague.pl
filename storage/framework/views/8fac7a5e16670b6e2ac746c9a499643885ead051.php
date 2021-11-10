<div class="season-teamOTW">
    <h2>Top team</h2>
    <div class="selects">
        <div class="league">
            <select name="League" id="">

                <option>League</option>

            </select>
            <input type="submit" class="btn" value="Pokaz">
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
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/season/inc/totw.blade.php ENDPATH**/ ?>