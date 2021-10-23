<form method="POST" action="<?php echo e(route('transfers.store')); ?>" class="buy">

    <div class="form-group">
        <label for="money">Kwota Transferu:</label>
        <input type="number" name="transferFee" id="transferFee" placeholder="Kwota" required>
    </div>

    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" name="extraOptions" id="extraOptions">
        <label class="custom-control-label" for="extraOptions">Pokaz Dodatkowe Opcje</label>
    </div>

    <div class="buyExtraOptions" style="display: none">
        <div class="form-group">
            <label for="extraPlayer">Zaoferuj piłkarza wystawionego na listę transferową:</label>
            <select class="custom-select" name="extraPlayer" id="extraPlayer">
                <option selected disabled>Wybierz Zawodnika</option>
                <?php $__currentLoopData = $user->team->players->where('transfer_listed', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($player->id); ?>"><?php echo e($player->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="nextTransferFee">Zaoferuj procent od kolejnego transferu:</label>
            <select class="custom-select" name="nextTransferFee" id="nextTransferFee">
                <?php $__currentLoopData = $nextFees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($fee); ?>"><?php echo e($fee); ?> %</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <button type="submit" name="action" value="buy" class="btn btn-success bshadow">Kup</button>
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
</form>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/forms/buy.blade.php ENDPATH**/ ?>