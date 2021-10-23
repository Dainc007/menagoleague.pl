

<?php $__env->startSection('title', 'Transfery'); ?>

<?php $__env->startSection('content'); ?>

<div class="transfers-content">
    <div class="content-table">

        <?php echo $__env->make('transfers.inc.transfers-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($type == 'transferListed'): ?>
        <?php echo $__env->make('transfers.inc.transferList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php if($type == 'freeAgents'): ?>
        <?php echo $__env->make('transfers.inc.freeAgentList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php if($type == 'loanListed'): ?>
        <?php echo $__env->make('transfers.inc.loanList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/transfers.blade.php ENDPATH**/ ?>