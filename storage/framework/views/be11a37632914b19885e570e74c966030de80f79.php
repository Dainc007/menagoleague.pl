

<?php $__env->startSection('title', config('app.name', 'Menago League')); ?>


<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.tutorialForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/home.blade.php ENDPATH**/ ?>