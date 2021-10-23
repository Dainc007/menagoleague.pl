

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('home.inc.scoreline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<!-- News and read more -->
<?php $__env->startSection('news'); ?>

<?php echo $__env->make('home.inc.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<!-- Discord and menagoleague stats -->
<?php $__env->startSection('stats'); ?>

<?php echo $__env->make('home.inc.statsContainer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<!-- Gameplay overview -->
<?php $__env->startSection('gameplay'); ?>
<?php echo $__env->make('home.inc.gameplayOverview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<!-- About menagoleague -->
<?php $__env->startSection('aboutgame'); ?>
<?php echo $__env->make('home.inc.aboutLeague', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/home/home.blade.php ENDPATH**/ ?>