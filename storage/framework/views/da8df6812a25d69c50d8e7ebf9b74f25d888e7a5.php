<?php if($user->tutorial): ?>

    <?php if($user->tutorial->status == 'sent'): ?>

        <form method="POST" action="<?php echo e(route('tutorial.delete', ['id' => $user->tutorial->id])); ?>">
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-danger w-100 text-uppercase bshadow"
                    value="wycofaj zaproszenie">
            </div>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
        </form>

    <?php endif; ?>

    <?php if($user->tutorial->full_time == null): ?>

        <h6 class="text-center mb-3"><?php echo e(__('central.tutorial.inviteSend')); ?></h6>

        <p class="text-center mb-3">
            <?php echo e(__('central.tutorial.inviteSend2')); ?>

            <a href="<?php echo e(route('help.tutorial')); ?>"><?php echo e(__('central.tutorial.here')); ?></a>.
        </p>


        <h6 class="text-center mb-4"><?php echo e(__('central.tutorial.application')); ?>

            <?php echo e(__('central.tutorial.application2')); ?> </h6>


        <form method="POST" action="<?php echo e(route('tutorial.store', ['id' => $user->tutorial->id])); ?>">

            <div class="form-group">
                <label for="raport"><?php echo e(__('central.tutorial.raport.afterGame')); ?></label>
                <input required class="form-control" type="text" name="fullTime"
                    placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287" />
            </div>

            <div class="form-group">
                <label for="raport"><?php echo e(__('central.tutorial.raport.after1stHalf')); ?></label>
                <input required class="form-control" type="text" name="halfTime"
                    placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287" />
            </div>

            <div class="form-group">
                <label for="raport"><?php echo e(__('central.tutorial.raport.fair-play')); ?></label>
                <input required class="form-control" type="text" name="fairPlay"
                    placeholder="np: https://gamerdvr.com/gamer/TwojGamerTag/video/134342287" />
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-success w-100 text-uppercase bshadow"
                    value="Złóz aplikacje" />
            </div>
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
        </form>
    <?php else: ?>

        <p class="mb-2"><b><?php echo e(__('central.tutorial.verify')); ?></b></p>
        <p><?php echo e(__('central.tutorial.result')); ?>

            <b><i>
                    <?php echo e(__('central.tutorial.results.' . $user->tutorial->status)); ?>

                </i></b>
        </p>
        <?php if($user->tutorial->status == 'failed'): ?>
            <p> <?php echo e(__('central.tutorial.reason')); ?> <?php echo e($user->tutorial->message); ?></p>
        <?php endif; ?>

    <?php endif; ?>

<?php else: ?>

    <h6 class="text-center mb-3"><?php echo e(__('central.tutorial.expired')); ?></h6>
    <p class="text-center mb-4">
        <?php echo e(__('central.tutorial.sparing')); ?>

        <a href="<?php echo e(route('help.tutorial')); ?>"><?php echo e(__('central.tutorial.here')); ?>.</a>
    </p>

    <p class="text-center">
        <b> <?php echo e(__('central.tutorial.partner')); ?> </b>
    </p>
    <ul class="text-center  list-unstyled">
        <li>
            <a target="_blank" href="<?php echo e(env('DISCORD')); ?>"><?php echo e(__('central.tutorial.discord')); ?></a>
        </li>
        <li>
            <a target="_blank" href="<?php echo e(env('FB')); ?>"><?php echo e(__('central.tutorial.facebook')); ?></a>
        </li>
    </ul>


    <form method="POST" action="<?php echo e(route('tutorial.invite')); ?>">
        <div class="form-group">
            <select name="rival" id="rival" class="form-control w-100">
                <?php $__currentLoopData = $user->getUsersByDeviceId(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $username): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($username->id); ?>"><?php echo e($username->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-success w-100 text-uppercase bshadow"
                value="<?php echo e(__('central.tutorial.invite')); ?>">
        </div>
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
    </form>
<?php endif; ?>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/tutorialForm.blade.php ENDPATH**/ ?>