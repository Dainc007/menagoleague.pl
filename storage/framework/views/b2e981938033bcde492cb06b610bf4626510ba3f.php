

<?php $__env->startSection('title', $team->name); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('team.inc.teamInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.homeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/team/show.blade.php ENDPATH**/ ?>