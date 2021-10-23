<form method="POST" action="<?php echo e(route('transfers.store')); ?>" class="sign">

    <div class="form-group">
        <label for="salary">Salary per week:</label>
        <input type="number" class="form-control" id="salary" name="salary" max="<?php echo e($user->team->budget ?? ''); ?>"
            required>
    </div>

    <div class="form-group">
        <label for="bonus">Premia za podpis:</label>
        <input type="number" class="form-control" id="bonus" name="bonus" max="<?php echo e($user->team->budget ?? ''); ?>"
            required>
    </div>

    <div class="form-group">
        <label for="role">Rola w druzynie:</label>
        <select class="form-control" id="role" name="role">
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($role); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="promises">Złóz deklaracje dotyczącą celów druzyny:</label>
        <select multiple class="form-control" id="goals" name="goals">
            <?php $__currentLoopData = $goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($promise); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <button type="submit" name="action" value="sign" class="btn btn-success bshadow">Zaproponuj Kontrakt</button>
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
</form>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/forms/sign.blade.php ENDPATH**/ ?>