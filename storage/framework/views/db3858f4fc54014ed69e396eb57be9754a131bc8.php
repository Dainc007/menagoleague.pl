<section class="office-finances">
    <h2 class="office-title"><?php echo e(__('office.finances.title')); ?></h2>
    <?php if($user->team): ?>
        <div class="finances">
            <div class="finances-details">
                <div class="details-info">
                    <p>
                        <?php echo e(__('office.finances.budget')); ?> 100 000 000
                    </p>
                    <p>
                        <?php echo e(__('office.finances.costs')); ?> 120 000
                    </p>
                </div>
            </div>
            <div class="finances-view">
                <div class="details-buttons">
                    <li class="active" data-number="0">
                        <?php echo e(__('office.finances.tabs.all')); ?>

                    </li>
                    <li data-number="1">
                        <?php echo e(__('office.finances.tabs.income')); ?>

                    </li>
                    <li data-number="2">
                        <?php echo e(__('office.finances.tabs.outgo')); ?>

                    </li>
                </div>
                <div id="all" class="active" data-number="0">
                    <table>
                        <tr>
                            <th><?php echo e(__('office.finances.col.title')); ?></th>
                            <th><?php echo e(__('office.finances.col.price')); ?></th>
                            <th><?php echo e(__('office.finances.col.before')); ?></th>
                            <th><?php echo e(__('office.finances.col.after')); ?></th>
                            <th><?php echo e(__('office.finances.col.date')); ?></th>
                        </tr>

                        <?php $__currentLoopData = $user->team->finances->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="<?php if($row->type == 'income'): ?> alert alert-success <?php else: ?> alert alert-danger <?php endif; ?>">
                                <td style="max-width:100px">
                                    <?php echo e(Str::limit($row->title, 15, '...')); ?>

                                    <span>
                                        <?php echo e($row->title); ?>

                                    </span>
                                </td>
                                <td><?php echo e($row->price); ?></td>
                                <td><?php echo e($row->money_before); ?></td>
                                <td><?php echo e($row->money_after); ?></td>
                                <td><?php echo e($row->updated_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <div id="income" data-number="1">
                    <table>
                        <tr>
                            <th><?php echo e(__('office.finances.col.title')); ?></th>
                            <th><?php echo e(__('office.finances.col.price')); ?></th>
                            <th><?php echo e(__('office.finances.col.before')); ?></th>
                            <th><?php echo e(__('office.finances.col.after')); ?></th>
                            <th><?php echo e(__('office.finances.col.date')); ?></th>
                        </tr>

                        <?php $__currentLoopData = $user->team->finances->where('type', 'income')->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="alert alert-success">
                                <td style="max-width:100px">
                                    <?php echo e(Str::limit($row->title, 15, '...')); ?>

                                    <span>
                                        <?php echo e($row->title); ?>

                                    </span>
                                </td>
                                <td><?php echo e($row->price); ?></td>
                                <td><?php echo e($row->money_before); ?></td>
                                <td><?php echo e($row->money_after); ?></td>
                                <td><?php echo e($row->updated_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <div id="outgoing" data-number="2">
                    <table>
                        <tr>
                            <th><?php echo e(__('office.finances.col.title')); ?></th>
                            <th><?php echo e(__('office.finances.col.price')); ?></th>
                            <th><?php echo e(__('office.finances.col.before')); ?></th>
                            <th><?php echo e(__('office.finances.col.after')); ?></th>
                            <th><?php echo e(__('office.finances.col.date')); ?></th>
                        </tr>
                        <?php $__currentLoopData = $user->team->finances->where('type', 'outgo')->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="alert alert-danger">
                                <td style="max-width:100px">
                                    <?php echo e(Str::limit($row->title, 15, '...')); ?>

                                    <span>
                                        <?php echo e($row->title); ?>

                                    </span>
                                </td>
                                <td><?php echo e($row->price); ?></td>
                                <td><?php echo e($row->money_before); ?></td>
                                <td><?php echo e($row->money_after); ?></td>
                                <td><?php echo e($row->updated_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-success" role="alert">
            <p><?php echo e(__('office.finances.noTeam')); ?></p>
        </div>
    <?php endif; ?>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/finances.blade.php ENDPATH**/ ?>