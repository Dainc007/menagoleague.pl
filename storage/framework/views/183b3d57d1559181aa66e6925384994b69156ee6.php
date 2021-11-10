

<?php $__env->startSection('title', 'Transfery'); ?>

<?php $__env->startSection('content'); ?>

    <div class="transfers-content">
        <?php if($user->team): ?>
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
        <?php else: ?>
        <div class="alert alert-info" role="alert">
            <h6> <?php echo e(__('team.noJob')); ?> <a href="<?php echo e(route('help.tutorial')); ?>">
            </h6>
          </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/transfers.blade.php ENDPATH**/ ?>