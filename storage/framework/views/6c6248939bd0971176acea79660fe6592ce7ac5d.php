

<?php $__env->startSection('title', config('app.name', 'Competitions')); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('player.inc.playerInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('player.players', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.homeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/show.blade.php ENDPATH**/ ?>