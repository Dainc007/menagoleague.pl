

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <div class="card">
                <?php if($data->editMode): ?>
                <?php echo $__env->make('user.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                <div class="card-header d-flex justify-content-between">
                    <?php echo e($personal_data->name); ?>

                    <form method="GET">
                        <input type="submit" name="editMode" class="btn btn-primary btn-sm" value="Tryb edycji danych">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>

                <div class="card-body justify-content-around">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>E-mail:</td>
                                <td><?php echo e($personal_data->email); ?></td>
                            </tr>
                            <tr>
                                <td>Discord:</td>
                                <td>#<?php echo e($personal_data->discord); ?></td>
                            </tr>
                            <tr>
                                <td>facebook:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu facebook')" target="_blank" href="https://www.facebook.com/<?php echo e($personal_data->facebook); ?>"><?php echo e($personal_data->facebook); ?></a></td>
                            </tr>
                            <tr>
                                <?php if($personal_data->device == 'Xbox'): ?>
                                <td>Klipy:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu Xboxdvr')" target="_blank" href="<?php echo e(env('Xboxdvr')); ?><?php echo e($personal_data->name); ?>"><?php echo e($personal_data->name); ?></a></td>


                                <?php else: ?>
                                <td>Konsola:</td>
                                <td><?php echo e($personal_data->device); ?></td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/user/account.blade.php ENDPATH**/ ?>