<?php echo e(session()->get('message') ?? ''); ?>


<h6>Rywale</h6>

<?php $__currentLoopData = $user->rivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userRvial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($userRvial->name); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('rival.invite')); ?>" method="POST">
    <select name="rivalId" class="custom-select">
        <?php $__currentLoopData = $user->getUsersByDeviceId(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $username): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($username->id); ?>"><?php echo e($username->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <input class="btn btn-sm btn-danger" type="submit" value="Zaproponuj rywalizację">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
</form>

<h6>Otrzymane Zaproszenia</h6>
<?php $__currentLoopData = $user->rivalsInvitations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invitation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(route('rival.respond', ['id' => $invitation->pivot->id])); ?>" method="POST">
    <button name="status" value="accepted">Akceptuj</button>
    <button name="status" value="rejected">Odrzuć</button>
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/userRivals.blade.php ENDPATH**/ ?>