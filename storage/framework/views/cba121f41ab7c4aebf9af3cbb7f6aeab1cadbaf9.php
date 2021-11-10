<section class="office-rivals">
    <h2 class="office-title"><?php echo e(__('office.rivals.title')); ?></h2>
    <div class="rivals-statistics">
        <?php $__currentLoopData = $user->rivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userRvial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="rival-info">
                <p class="rival-name"><?php echo e($userRvial->name); ?>

                </p>
                <div class="rival-form">
                    <div class='bg-danger text-white'>P</div>
                    <div class='bg-warning text-white'>R</div>
                    <div class='bg-success text-white'>W</div>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <form action="<?php echo e(route('rival.invite')); ?>" method="POST">
        <select name="rivalId" class="custom-select">
            <?php $__currentLoopData = $user->getUsersByDeviceId(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $username): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($username->id); ?>"><?php echo e($username->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <input class="btn btn-sm btn-info bshadow" type="submit" value="<?php echo e(__('office.rivals.invite')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
    </form>

    <?php if($user->rivalsInvitations && $user->rivalsInvitations->count() > 0): ?>
        <h6 class="carrer-invites"><?php echo e(__('office.rivals.invitations')); ?></h6>
        <?php $__currentLoopData = $user->rivalsInvitations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invitation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('rival.respond', ['id' => $invitation->pivot->id])); ?>" method="POST">
                <button class="btn btn-success" name="status"
                    value="accepted"><?php echo e(__('office.rivals.accept')); ?></button>
                <button class="btn btn-danger" name="status"
                    value="rejected"><?php echo e(__('office.rivals.reject')); ?></button>
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/rivals.blade.php ENDPATH**/ ?>