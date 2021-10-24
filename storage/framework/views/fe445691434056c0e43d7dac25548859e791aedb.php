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
            <img src="https://fifastatic.fifaindex.com/FIFA22/players/<?php echo e($player->playerDetails->id); ?>.png" alt="">
            <div class="info">
                <p class="name"><?php echo e($player->name); ?></p>
                <div class="about">
                    <div class="squareNum"><?php echo e(rand(80, 100)); ?></div>
                    <div>
                        <p><?php echo e(__('player.positions.' . $player->playerDetails->bestPosition)); ?>

                            (<?php echo e($player->playerDetails->club); ?>)</p>
                        <p><?php echo e(__('player.age')); ?>: <?php echo e($player->playerDetails->age); ?> <?php echo e(__('player.years')); ?> <span>
                                <?php echo e(__('player.height')); ?>: <?php echo e($player->playerDetails->height); ?>cm
                                <?php echo e(__('player.weight')); ?>: <?php echo e($player->playerDetails->weight); ?>kg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="https://fifastatic.fifaindex.com/FIFA22/players/<?php echo e($player->playerDetails->id); ?>.png" alt="">
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
                <p class="name"><?php echo e($player->name); ?></p>
                <div class="about">
                    <div class="squareNum"><?php echo e($player->playerDetails->overall); ?></div>
                    <div>
                        <p><?php echo e(__('player.positions.' . $player->playerDetails->bestPosition)); ?>

                            (<?php echo e($player->playerDetails->club); ?>)</p>
                        <p><?php echo e(__('player.age')); ?>: <?php echo e($player->playerDetails->age); ?> <?php echo e(__('player.years')); ?> <span>
                                <?php echo e(__('player.height')); ?>: <?php echo e($player->playerDetails->height); ?>cm
                                <?php echo e(__('player.weight')); ?>: <?php echo e($player->playerDetails->weight); ?>kg</span></p>
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