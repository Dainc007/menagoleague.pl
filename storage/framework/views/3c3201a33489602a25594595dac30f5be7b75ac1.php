<section class="central-advance">
    <div class="advance-headers">
        <h2><a href="<?php echo e(route('central.fullCalendar')); ?>"><?php echo e(__('central.calendar.title')); ?></a></h2>
        <span><?php echo e(__('central.calendar.month.' . $calendar[0]->format('M'))); ?> <?php echo e($calendar[0]->format('Y')); ?></span>
    </div>

    <div class="advance-callendar">
        <?php $__currentLoopData = $calendar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixtures !== ''): ?>
                <div class="advance-callendar-day">
                    <p><?php echo e(__('central.calendar.day.' . $day->format('D'))); ?>

                        <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($game->date == $day->format('Y-m-d')): ?>
                                <span><?php echo e($day->format('h:s')); ?></span>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                    <div>
                        <p><?php echo e($day->format('d')); ?></p>
                        <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($game->date == $day->format('Y-m-d')): ?>
                                <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <span class="material-icons">swap_horiz</span>
                </div>
            <?php else: ?>
                <div class="advance-callendar-day">
                    <p><?php echo e(__('central.calendar.day.' . $day->format('D'))); ?>

                    </p>
                    <div>
                        <p><?php echo e($day->format('d')); ?></p>
                    </div>
                    <span class="material-icons">swap_horiz</span>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/calendar.blade.php ENDPATH**/ ?>