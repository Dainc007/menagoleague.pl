<div class="lastMatches">
    <div class="table">
        <div class="legend">
            <div class="date">Data</div>
            <div class="region">Region</div>
            <div class="club">Gospodarz</div>
            <div class="club">Gość</div>
            <div class="team-score">Wynik</div>
            <div class="played-minutes">
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
            <div class="condition">Form</div>
        </div>

        <div class="table-content">
            <?php for($i = 1; $i <= 10; $i++): ?>
                <div class="item">
                    <div class="date">12.08.21</div>
                    <div class="region">
                        <img src="/images/shields/6.png" alt="">
                        WWW
                    </div>
                    <div class="club">
                        <img src="/images/shields/6.png" alt="">
                        Borussia Dortmund
                    </div>
                    <div class="club">
                        <img src="/images/shields/6.png" alt="">
                        Bayern Monachium
                    </div>
                    <div class="team-score">1 : 3</div>
                    <div class="played-minutes"><?php echo e(rand(0, 100)); ?>'</div>
                    <div class="goals"><?php echo e(rand(0, 100)); ?></div>
                    <div class="asists"><?php echo e(rand(0, 100)); ?></div>
                    <div class="yellow-cards"><?php echo e(rand(0, 100)); ?></div>
                    <div class="red-cards"><?php echo e(rand(0, 100)); ?></div>
                    <div class="condition">
                        <div class="win" title="<?php echo e(rand(0, 10)); ?>:<?php echo e(rand(0, 10)); ?>">W</div>
                        
                    </div>
                </div>
            <?php endfor; ?>

            <?php for($i = 1; $i <= 10; $i++): ?>
                <div class="ritem">
                    <div class="clubHost">
                        <img src="/images/shields/6.png" alt="">
                        Borussia Dortmund
                    </div>
                    <div class="clubGuest">
                        <img src="/images/shields/6.png" alt="">
                        Bayern Monachium
                    </div>
                    <div class="info">
                        <div class="played-minutes">
                            <img src="/images/tshirt.svg" alt="">
                            <div class="played-minutes"><?php echo e(rand(0, 100)); ?>'</div>
                        </div>
                        <div class="goals">
                            <img src="/images/goal-icon.svg" alt="">
                            <div class="goals"><?php echo e(rand(0, 100)); ?></div>
                        </div>
                        <div class="asists">
                            <img src="/images/asist-icon.svg" alt="">
                            <div class="asists"><?php echo e(rand(0, 100)); ?></div>
                        </div>
                        <div class="yellow-cards">
                            <img src="/images/yellow-card.svg" alt="">
                            <div class="yellow-cards"><?php echo e(rand(0, 100)); ?></div>
                        </div>
                        <div class="red-cards">
                            <img src="/images/red-card.svg" alt="">
                            <div class="red-cards"><?php echo e(rand(0, 100)); ?></div>
                        </div>
                    </div>
                    <div class="team-score">1 : 3</div>
                    <div class="date">12.08.21</div>
                    <div class="condition">
                        <div class="win" title="<?php echo e(rand(0, 10)); ?>:<?php echo e(rand(0, 10)); ?>">W</div>
                        
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/inc/lastMatches.blade.php ENDPATH**/ ?>