<div class="transfer-table">
    <div class="legend">
        <div class="position">POZ</div>
        <div class="name">Name</div>
        <div class="team">Team</div>
        <div class="ovr">OVR</div>
        <div class="price">Price</div>
        <div class="action">Act</div>
    </div>
    <div class="data">
        <?php $__currentLoopData = $freeAgentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <div class="position"><?php echo e($player->position); ?></div>
                <div class="name">
                    <img src="/images/placeholder-person.svg" alt="">
                    <p><?php echo e($player->name); ?></p>
                </div>
                <div class="team">
                    <p>Ready to hire</p>
                </div>
                <div class="ovr"><?php echo e($player->overall); ?></div>
                <div class="price"><?php echo e(rand(10000000, 100000000)); ?> $</div>
                <div class="action dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdown<?php echo e($player->id); ?>"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <?php echo $__env->make('transfers.forms.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $freeAgentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ritem">
                <div class="position"><?php echo e($player->position); ?></div>
                <div class="name">
                    <img src="/images/placeholder-person.svg" alt="">
                    <p><?php echo e($player->name); ?></p>
                </div>
                <div class="team">
                    <p>Ready to hire</p>
                </div>
                <div class="ovr"><?php echo e($player->overall); ?></div>
                <div class="price"><?php echo e(rand(10000000, 100000000)); ?> $</div>
                <div class="action">
                    <button class="dropdown-toggle" type="button" id="dropdown<?php echo e($player->id); ?>"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <?php echo $__env->make('transfers.forms.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>

<?php echo e($freeAgentList->links()); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/inc/freeAgentList.blade.php ENDPATH**/ ?>