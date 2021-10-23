<div class="groupStage">

    <?php
        $groups = ['A', 'B', 'C', 'D'];
    ?>

    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="groupStage-item <?php echo e($group === 'A' ? 'active' : ''); ?>">
            <div class="groupStage-item-header">GROUP <?php echo e($group); ?></div>
            <div class="groupStage-item-table">
                <div class="groupStage-item-table-legend">
                    <div class="P">P</div>
                    <div class="W">W</div>
                    <div class="O">O</div>
                    <div class="L">L</div>
                    <div class="GF">GF</div>
                    <div class="GA">GA</div>
                    <div class="GD">GD</div>
                    <div class="PTS">PTS</div>
                </div>
                <div class="groupStage-item-table-content">
                    <?php for($a = 1; $a <= 4; $a++): ?>
                        <div class="groupStage-item-table-content-item">
                            <div class="id"><?php echo e($a); ?>.</div>
                            <div class="team">Manchester City</div>
                            <div class="P"><?php echo e(rand(0, 20)); ?></div>
                            <div class="W"><?php echo e(rand(0, 20)); ?></div>
                            <div class="O"><?php echo e(rand(0, 20)); ?></div>
                            <div class="L"><?php echo e(rand(0, 20)); ?></div>
                            <div class="GF"><?php echo e(rand(0, 20)); ?></div>
                            <div class="GA"><?php echo e(rand(0, 20)); ?></div>
                            <div class="GD"><?php echo e(rand(0, 20)); ?></div>
                            <div class="PTS"><?php echo e(rand(0, 20)); ?></div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/help/tournaments/inc/groupView.blade.php ENDPATH**/ ?>