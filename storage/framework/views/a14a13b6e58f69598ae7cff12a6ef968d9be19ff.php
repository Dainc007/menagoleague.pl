

<?php $__env->startSection('content'); ?>
Lista aktywnych rozgrywek
<?php $__currentLoopData = $competitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="/competitions/<?php echo e($competition->id); ?>">
    <h6><?php echo e($competition->league_id); ?></h6>
    <p><?php echo e($competition->start); ?> - <?php echo e($competition->end); ?></p>
    <small><?php echo e($competition->id); ?></small>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/competition/index.blade.php ENDPATH**/ ?>