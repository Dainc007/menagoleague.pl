<?php if(($jobOffers != null)): ?>
<h6>Dostępne oferty pracy</h6>

<div class="d-flex justify-content-center">
    <?php echo e($jobOffers->links()); ?>

</div>

<?php $__currentLoopData = $jobOffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<p><a href="<?php echo e(route('teams.show',['team' => $team])); ?>"><?php echo e($team->name); ?></a><?php echo e($team->device_id); ?>

    <?php if($team->league): ?>
    <?php echo e($team->league->region); ?>

    <?php echo e($team->league->level); ?>

    <?php endif; ?>
    <?php if($user->isManager()): ?>
    <form method="POST" action="<?php echo e(route('team.application', ['id' => $team->id])); ?>">
    <input type="submit" class="btn btn-success btn-sm" value="Aplikuj">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
    </form>
</p>
<?php else: ?>
Zdobądź licencję trenerską by aplikować na to stanowisko</p>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<h6>Obecnie nie ma dostępnych ofert pracy</h6>
<button class="btn btn-sm btn-danger">Złóz wniosek o stworzenie nowej druzyny</button>
<?php endif; ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/jobOffers.blade.php ENDPATH**/ ?>