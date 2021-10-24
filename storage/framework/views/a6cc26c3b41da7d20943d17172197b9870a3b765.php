<div class="details">
    <div class="stats">
        <div>
            <span class="starNum">
                <img src="/images/icons/star.png" alt="">
                <p><?php echo e($player->playerDetails->weakFoot); ?></p>
            </span>
            <p><?php echo e(__('player.weakFoot')); ?></p>
        </div>
        <div>
            <span class="starNum">
                <img src="/images/icons/star.png" alt="">
                <p><?php echo e($player->playerDetails->skillMoves); ?></p>
            </span>
            <p><?php echo e(__('player.skillMoves')); ?></p>
        </div>
        <div>
            <p><?php echo e(__('player.work')); ?>:
                <span><?php echo e($player->playerDetails->attackingWorkRate); ?>/<?php echo e($player->playerDetails->defensiveWorkrate); ?></span>
            </p>
        </div>
        <div>
            <span class="foot">
                <img src="/images/icons/foot.png" alt="">
            </span>
            <p><?php echo e(__('player.foot')); ?>: <span><?php echo e(__('player.' . $player->playerDetails->preferredFoot)); ?></span></p>
        </div>
    </div>
    <div class="entities">

        <div class="entity traits">
            <h2><?php echo e(__('player.skills.summary')); ?></h2>

            <?php if($player->playerDetails->bestPosition == 'GK'): ?>
                <div><span class="squareNum"><?php echo e($player->playerDetails->paceTotal); ?></span>
                    <p><?php echo e(__('player.skills.diving')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->shootingTotal); ?></span>
                    <p><?php echo e(__('player.skills.handling')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->passingTotal); ?></span>
                    <p><?php echo e(__('player.skills.kicking')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->dribblingTotal); ?></span>
                    <p><?php echo e(__('player.skills.reflex')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->defendingTotal); ?></span>
                    <p><?php echo e(__('player.skills.pace')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->physicaliTytotal); ?></span>
                    <p><?php echo e(__('player.skills.positioning')); ?></p>
                </div>
            <?php else: ?>
                <div><span class="squareNum"><?php echo e($player->playerDetails->paceTotal); ?></span>
                    <p><?php echo e(__('player.skills.pace')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->shootingTotal); ?></span>
                    <p><?php echo e(__('player.skills.shooting')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->passingTotal); ?></span>
                    <p><?php echo e(__('player.skills.passing')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->dribblingTotal); ?></span>
                    <p><?php echo e(__('player.skills.dribbling')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->defendingTotal); ?></span>
                    <p><?php echo e(__('player.skills.defending')); ?></p>
                </div>
                <div><span class="squareNum"><?php echo e($player->playerDetails->physicaliTytotal); ?></span>
                    <p><?php echo e(__('player.skills.physicality')); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <div class="entity attack">
            <h2><?php echo e($player->playerDetails->attackTotal); ?><?php echo e(__('player.skills.attacking')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->crossing); ?></span>
                <p><?php echo e(__('player.skills.crossing')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->finishing); ?></span>
                <p><?php echo e(__('player.skills.finishing')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->headingAccuracy); ?></span>
                <p><?php echo e(__('player.skills.heading')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->shortPassing); ?></span>
                <p><?php echo e(__('player.skills.shortPassing')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->volleys); ?></span>
                <p><?php echo e(__('player.skills.volleys')); ?></p>
            </div>
        </div>

        <div class="entity skill">
            <h2><?php echo e(__('player.skills.skill')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->dribbling); ?></span>
                <p><?php echo e(__('player.skills.dribbling')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->curve); ?></span>
                <p><?php echo e(__('player.skills.curve')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->FKAccuracy); ?></span>
                <p><?php echo e(__('player.skills.fka')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->longPassing); ?></span>
                <p><?php echo e(__('player.skills.longPassing')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->ballControl); ?></span>
                <p> <?php echo e(__('player.skills.ballControl')); ?></p>
            </div>
        </div>

        <div class="entity movement">
            <h2><?php echo e(__('player.skills.movement')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->acceleration); ?></span>
                <p><?php echo e(__('player.skills.acc')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->sprintSpeed); ?></span>
                <p><?php echo e(__('player.skills.sprint')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->agility); ?></span>
                <p><?php echo e(__('player.skills.agility')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->reactions); ?></span>
                <p><?php echo e(__('player.skills.reactions')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->balance); ?></span>
                <p><?php echo e(__('player.skills.balance')); ?></p>
            </div>
        </div>

        <div class="entity power">
            <h2><?php echo e(__('player.skills.power')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->shotPower); ?></span>
                <p><?php echo e(__('player.skills.shotPower')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->jumping); ?></span>
                <p><?php echo e(__('player.skills.jumping')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->stamina); ?></span>
                <p><?php echo e(__('player.skills.stamina')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->strength); ?></span>
                <p><?php echo e(__('player.skills.strength')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->longShots); ?></span>
                <p><?php echo e(__('player.skills.longShots')); ?></p>
            </div>
        </div>

        <div class="entity mentality">
            <h2><?php echo e(__('player.skills.mentality')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->aggression); ?></span>
                <p><?php echo e(__('player.skills.aggression')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->interceptions); ?></span>
                <p><?php echo e(__('player.skills.interceptions')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->positioning); ?></span>
                <p><?php echo e(__('player.skills.positioning')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->vision); ?></span>
                <p><?php echo e(__('player.skills.vision')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->penalties); ?></span>
                <p><?php echo e(__('player.skills.penalties')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->composure); ?></span>
                <p><?php echo e(__('player.skills.composure')); ?></p>
            </div>
        </div>

        <div class="entity defending">
            <h2><?php echo e(__('player.skills.defending2')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->marking); ?></span>
                <p><?php echo e(__('player.skills.marking')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->standingTackle); ?></span>
                <p><?php echo e(__('player.skills.standing')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->slidingTackle); ?></span>
                <p><?php echo e(__('player.skills.sliding')); ?></p>
            </div>
        </div>

        <div class="entity goalkeeping">
            <h2><?php echo e(__('player.skills.gk')); ?></h2>

            <div><span class="squareNum"><?php echo e($player->playerDetails->GKDiving); ?></span>
                <p><?php echo e(__('player.skills.diving')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->GKHandling); ?></span>
                <p><?php echo e(__('player.skills.handling')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->GKKicking); ?></span>
                <p><?php echo e(__('player.skills.kicking')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->GKPositioning); ?></span>
                <p><?php echo e(__('player.skills.positioning')); ?></p>
            </div>
            <div><span class="squareNum"><?php echo e($player->playerDetails->GKReflexes); ?></span>
                <p><?php echo e(__('player.skills.reflex')); ?></p>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/inc/details.blade.php ENDPATH**/ ?>