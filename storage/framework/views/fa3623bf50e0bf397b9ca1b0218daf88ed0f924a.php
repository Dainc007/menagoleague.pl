<section class="central-notifications">
    
    <ul class="nav nav-tabs headers-switch" id="myTab" role="tablist">
        
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="last-transfers-tab" data-toggle="tab" href="#last-transfers" role="tab"
                aria-controls="last-transfers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="big-transfers-tab" data-toggle="tab" href="#big-transfers" role="tab"
                aria-controls="big-transfers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
    </ul>


    <div class="tab-content notifications-content" id="myTabContent">

        
        

        
        <div class="central-notifications-content tab-pane fade active show" id="last-transfers" role="tabpanel"
            aria-labelledby="last-transfers-tab">
            <div class="header-w-tab">
                <h2><?php echo e(__('central.lastTransfers')); ?></h2>
            </div>

            <div class="notifications-content">
                <?php if(!$transfers): ?>
                    <?php $__currentLoopData = $transfers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transfer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="notifications-content-item">
                            <img src="<?php echo e(env('TEAM_SRC')); ?><?php echo e($transfer->from->sofifa_id ?? '111592'); ?>.png">
                            <div>
                                <p><?php echo e($transfer->fee); ?> <i>M$</i></p>
                                <img src="<?php echo e(url('/images/arrow.svg')); ?>" alt="">
                                <p> <?php echo e($transfer->player->name); ?> </p>
                            </div>
                            <img src="<?php echo e(env('TEAM_SRC')); ?><?php echo e($player->to->sofifa_id ?? '111592'); ?>.png">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="notifications-content-placeholder">
                        <p><?php echo e(__('central.noData')); ?></p>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        
        <div class="central-notifications-content tab-pane fade" id="big-transfers" role="tabpanel"
            aria-labelledby="big-transfers-tab">
            <div class="header-w-tab">
                <h2><?php echo e(__('central.bigTransfers')); ?></h2>
            </div>

            <div class="notifications-content">
                <?php if(!$biggestTransfers): ?>
                    <?php $__currentLoopData = $biggestTransfers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transfer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="notifications-content-item">
                            <img src="<?php echo e(env('TEAM_SRC')); ?><?php echo e($transfer->from->sofifa_id ?? '111592'); ?>.png">
                            <div>
                                <p><?php echo e($transfer->fee); ?> <i>M$</i></p>
                                <img src="<?php echo e(url('/images/arrow.svg')); ?>" alt="">
                                <p> <?php echo e($transfer->player->name); ?> </p>
                            </div>
                            <img src="<?php echo e(env('TEAM_SRC')); ?><?php echo e($player->to->sofifa_id ?? '111592'); ?>.png">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="notifications-content-placeholder">
                        <p><?php echo e(__('central.noData')); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/notifications.blade.php ENDPATH**/ ?>