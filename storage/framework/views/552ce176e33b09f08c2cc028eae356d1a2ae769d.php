<div class="leagueInfo">
    <h2><?php echo e(__('league.' . $competition->league->region . '.' . $competition->league->level)); ?></h2>

    <div class="table">
        <div class="team-info">
            <div class="legend">
                <div class="ID">ID</div>
                <div class="name">Name</div>
            </div>
            <?php ($i = 1); ?>
            <?php $__currentLoopData = $competition->leagueTables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <div class="ID"><?php echo e($i); ?></div>
                    <div class="name"><?php echo e($row->team->name); ?>Manchester City</div>
                </div>
                <?php ($i++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="team-stats">
            <div class="legend">
                <div class="M">M</div>
                <div class="W">W</div>
                <div class="R">R</div>
                <div class="P">P</div>
                <div class="B">B</div>
                <div class="pkt">Pkt</div>
                <div class="condition">Forma</div>
            </div>
            <?php $__currentLoopData = $competition->leagueTables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <div class="stats">
                        <div class="M"><?php echo e($row->games); ?></div>
                        <div class="W"><?php echo e($row->wins); ?></div>
                        <div class="R"><?php echo e($row->draws); ?></div>
                        <div class="P"><?php echo e($row->losts); ?></div>
                        <div class="B">
                            <?php echo e($row->goals_scored); ?>:<?php echo e($row->goals_lost); ?></div>
                        <div class="P"><?php echo e($row->points); ?></div>
                        <div class="condition">
                            <div class="next-match" title="?:?">?</div>
                            <div class="lose" title="<?php echo e(rand(0, 10)); ?>:<?php echo e(rand(0, 10)); ?>">L</div>
                            <div class="draw" title="<?php echo e(rand(0, 10)); ?>:<?php echo e(rand(0, 10)); ?>">R</div>
                            <div class="lose" title="<?php echo e(rand(0, 10)); ?>:<?php echo e(rand(0, 10)); ?>">L</div>
                            <div class="win" title="<?php echo e(rand(0, 10)); ?>:<?php echo e(rand(0, 10)); ?>">W</div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/competition/inc/leagueInfo.blade.php ENDPATH**/ ?>