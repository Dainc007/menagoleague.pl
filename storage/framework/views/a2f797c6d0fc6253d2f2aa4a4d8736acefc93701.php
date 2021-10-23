

<?php $__env->startSection('title', config('app.name', 'Competitions')); ?>


<?php $__env->startSection('content'); ?>
<div class="competition-content">
    
    <?php if($competition->league && $competition->league->type == 'league'): ?>
    <?php echo $__env->make('competition.inc.leagueInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('season.inc.topScorers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('season.inc.topAsists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('season.inc.cleanSheets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('season.inc.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.homeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/competition/show.blade.php ENDPATH**/ ?>