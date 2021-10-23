<div class="status-content tab-pane fade active show" id="status" role="tabpanel" aria-labelledby="standings-tab">
    <div class="player-status-container">
        <div class="player-status-desc">
            <p class="pos"><?php echo e(__('team.table.position')); ?></p>

            <p class="name"><?php echo e(__('team.table.name')); ?></p>

            <p class="overall"><?php echo e(__('team.table.ovr')); ?></p>

            <p class="role"><?php echo e(__('team.table.role')); ?></p>

            <p class="action"><?php echo e(__('team.table.act')); ?></p>
        </div>
        <div class="player-status-content">
            <?php if($user->team->players !== null): ?>
                <?php $__currentLoopData = $user->team->players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="player-status-item">
                        <p class="pos"><?php echo e($player->position); ?></p>

                        <a class="name" href="<?php echo e(route('players.show', ['player' => $player])); ?>">
                            <img class="player-image"
                                src="https://fifastatic.fifaindex.com/FIFA21/images/players/5/158023.png" alt="">
                            <?php echo e($player->name); ?>

                        </a>

                        <p class="overall"><?php echo e($player->overall); ?></p>

                        <p class="role">Rotating</p>

                        <div class="dropdown player-actions-container">
                            <button class="btn w-100 h-100 dropdown-toggle material-icons" type="button"
                                id="dropdown<?php echo e($player->id); ?>" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown<?php echo e($player->id); ?>">
                                <a class="dropdown-item" href="#"><?php echo e(__('player.actions.talk')); ?></a>
                                <a class="dropdown-item" href="#"><?php echo e(__('player.actions.stats')); ?></a>
                                <a class="dropdown-item" href="#"><?php echo e(__('player.actions.extend')); ?></a>
                                <a class="dropdown-item" href="#"><?php echo e(__('player.actions.sell')); ?></a>
                                <a class="dropdown-item" href="#"><?php echo e(__('player.actions.terminate')); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>W Twojej druzynie nie ma obecnie zadnego piłkarza</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/team/inc/status.blade.php ENDPATH**/ ?>