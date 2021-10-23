<div class="tournamentTree">
    <div class="tournamentTree-legend">
        <div class="r16">r16</div>
        <div class="qtr">qtr</div>
        <div class="semi">semi</div>
        <div class="final">final</div>
        <div class="semi">semi</div>
        <div class="qtr">qtr</div>
        <div class="r16">r16</div>
    </div>
    <div class="tournamentTree-content">
        <div class="r16">
            <?php for($i = 1; $i <= 8; $i++): ?>
                <div class="team">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="qtr">
            <?php for($i = 1; $i <= 4; $i++): ?>
                <div class="team">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="semi">
            <?php for($i = 1; $i <= 2; $i++): ?>
                <div class="team">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="final">
            <?php for($i = 1; $i <= 2; $i++): ?>
                <div class="team">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
            <div class="trophy"><img src="/images/trophy.svg" alt=""></div>
        </div>

        <div class="semi">
            <?php for($i = 1; $i <= 2; $i++): ?>
                <div class="team rev">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="qtr">
            <?php for($i = 1; $i <= 4; $i++): ?>
                <div class="team rev">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="r16">
            <?php for($i = 1; $i <= 8; $i++): ?>
                <div class="team rev">
                    <div class="img">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="" />
                    </div>

                    <div class="score"><?php echo e(rand(0, 9)); ?></div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/help/tournaments/inc/internationalRoundOf16.blade.php ENDPATH**/ ?>