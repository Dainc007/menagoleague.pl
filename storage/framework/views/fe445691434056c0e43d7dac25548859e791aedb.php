<div class="playerInfo">
    <div class="r-content">
        <div class="trophies">
            <?php
                $how = rand(1, 8);
            ?>
            <?php for($i = 1; $i <= $how; $i++): ?>
                <div class="trophy" data-toggle="tooltip" data-placement="top"
                    title='Gets <?php echo e(rand(1, 10)); ?> trophies!'>
                    <img src="/images/trophy.svg" alt="">
                    <p class="number"><?php echo e(rand(1, 10)); ?></p>
                </div>
            <?php endfor; ?>
        </div>
        <div class="player">
            <img src="/images/placeholder-person.svg" alt="">
            <div class="info">
                <p class="name">Robert Lewandowski</p>
                <div class="about">
                    <div class="squareNum"><?php echo e(rand(80, 100)); ?></div>
                    <div>
                        <p>Napastnik (Bayern Monachium)</p>
                        <p>Wiek: 32 (12.12.1234) <span><?php echo e(rand(180, 200)); ?>cm <?php echo e(rand(80, 100)); ?>kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="/images/placeholder-person.svg" alt="">
            <div class="info">
                <div class="trophies">
                    <?php for($i = 1; $i <= $how; $i++): ?>
                        <div class="trophy" data-toggle="tooltip" data-placement="top"
                            title='Gets <?php echo e(rand(1, 10)); ?> trophies!'>
                            <img src="/images/trophy.svg" alt="">
                            <p class="number"><?php echo e(rand(1, 10)); ?></p>
                        </div>
                    <?php endfor; ?>
                </div>
                <p class="name">Robert Lewandowski</p>
                <div class="about">
                    <div class="squareNum"><?php echo e(rand(80, 100)); ?></div>
                    <div>
                        <p>Napastnik (Bayern Monachium)</p>
                        <p>Wiek: 32 (12.12.1234) <span><?php echo e(rand(180, 200)); ?>cm <?php echo e(rand(80, 100)); ?>kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="cost">
            <p class="price"><span>10,00</span> <small>mln €</small></p>
            <p class="last-change"><small>Ostatnia zmiana: 26 maj 2021</small></p>
        </div>
        <img src="/images/shields/<?php echo e(rand(1, 8)); ?>.png" alt="">
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/inc/playerInfo.blade.php ENDPATH**/ ?>