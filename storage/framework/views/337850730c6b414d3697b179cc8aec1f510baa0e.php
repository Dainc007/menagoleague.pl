<?php $__env->startSection('title', 'Twój Skład'); ?>

<?php $__env->startSection('content'); ?>

<?php if($user->team): ?>
<div class="squad-content">
    <?php echo $__env->make('team.inc.teamManagement', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php endif; ?>

<?php if($user->isManager()): ?>
<h6> <?php echo e(__('team.noJob')); ?> <a href="<?php echo e(route('help.tutorial')); ?>"><?php echo e(__('team.here')); ?></a>
</h6>
<?php else: ?>
<h6><?php echo e(__('team.noLicence')); ?>

     <a href="<?php echo e(route('help.tutorial')); ?>"><?php echo e(__('team.here')); ?></a></h6>
<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/daniel/Documents/GitHub/Menagoleague.pl/resources/views/team/team.blade.php ENDPATH**/ ?>