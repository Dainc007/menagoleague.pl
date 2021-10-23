<div class="attributes-content tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="standings-tab">
    <div class="player-attributes-container">

        <div class="player-attributes-desc">
            <p class="pos"><?php echo e(__('team.table.position')); ?></p>

            <p class="name"><?php echo e(__('team.table.name')); ?></p>

            <p class="overall"><?php echo e(__('team.table.ovr')); ?></p>

            <p class="role"><?php echo e(__('team.table.role')); ?></p>

            <p class="action"><?php echo e(__('team.table.act')); ?></p>
        </div>

        <div class="player-attributes-content">
            <?php if($user->team->players !== null): ?>
            <?php $__currentLoopData = $user->team->players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="player-attributes-item">
                <p class="pos"> LM CM CAM</p>

                <a class="name" href="<?php echo e(route('players.show', ['player' => $player])); ?>">
                    <img class="player-image" src="https://picsum.photos/50/50" alt="">
                    <?php echo e($player->name); ?>

                </a>

                <p class="age"><?php echo e($player->age); ?></p>

                <p class="overall"><?php echo e($player->overall); ?></p>

                <p class="nationality"><?php echo e($player->nationality); ?></p>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <p><?php echo e(__('team.empty')); ?>W Twojej druzynie nie ma obecnie zadnego piłkarza</p>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/team/inc/attributes.blade.php ENDPATH**/ ?>