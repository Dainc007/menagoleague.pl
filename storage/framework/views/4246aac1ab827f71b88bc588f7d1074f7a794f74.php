<!-- BRAKUJE OBSŁUGI SYTACJI< W KTÓREJ USER NIE MA LICENCJI TRENERA -->

<section class="office-jobs">
    <h2 class="office-title"><?php echo e(__('office.job.title')); ?></h2>
    <div class="jobs-offers">
        <?php if($jobOffers == null): ?>
        <div class="offers-none">
            <p><?php echo e(__('office.job.noJob')); ?></p>
            <button class="btn btn-sm btn-success"><?php echo e(__('office.job.createTeam')); ?></button>
        </div>
        <?php else: ?>
        <div class="offers-details">
            <div class="offers-buttons">
                <li class="active" data-type="free-vacancies" data-number="0">
                    <?php echo e(__('office.job.tabs.open')); ?>

                </li>
                <li data-type="danger-vacancies" data-number="1">
                    <?php echo e(__('office.job.tabs.thread')); ?>

                </li>
                <li data-type="all-offers" data-number="2">
                    <?php echo e(__('office.job.tabs.all')); ?>

                </li>
            </div>


            <div class="offer-cards">
                <div class="offers-jobs active" data-type="free-vacancies">
                    <?php ($i = 1); ?>
                    <?php $__currentLoopData = $jobOffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="offers-data <?php if($i == 1): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('teams.show',['team' => $job])); ?>">
                            <div class="data-logo">
                                <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
                            </div>
                            <div class="data-club">
                                <p> <?php echo e($job->name); ?></p>
                            </div>
                        </a>
                        <div class="data-league">
                            <p><b><?php echo e(__('office.job.league')); ?></b>:<?php if($job->league !== null): ?> <?php echo e($job->league->region); ?><?php endif; ?></p>
                        </div>
                        <div class="data-manager">
                            <p><b><?php echo e(__('office.job.manager')); ?></b>:<?php if($job->user !== null): ?> <?php echo e($job->user->name); ?><?php endif; ?></p>
                        </div>
                        <form method="POST" action="<?php echo e(route('team.application', ['id' => $job->id])); ?>">
                            <input type="submit" class="btn btn-sm btn-success" value="<?php echo e(__('office.job.apply')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                        </form>
                    </div>
                    <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="0">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="0">redo</button>
                    </div>
                </div>

                <div class="offers-jobs" data-type="danger-vacancies">
                    <?php ($i=0); ?>
                    <?php $__currentLoopData = $jobOffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="offers-data  <?php if($i == 1): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('teams.show',['team' => $job])); ?>">
                            <div class="data-logo">
                                <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
                            </div>
                            <div class="data-club">
                                <p><?php echo e($job->name); ?></p>
                            </div>
                        </a>
                        <div class="data-league">
                            <p><b><?php echo e(__('office.job.league')); ?></b>:<?php if($job->league !== null): ?> <?php echo e($job->league->region); ?><?php endif; ?></p>
                        </div>
                        <div class="data-manager">
                            <p><b><?php echo e(__('office.job.manager')); ?></b>:<?php if($job->user !== null): ?> <?php echo e($job->user->name); ?><?php endif; ?></p>
                        </div>

                        <form method="POST" action="<?php echo e(route('team.application', ['id' => $job->id])); ?>">
                            <input type="submit" class="btn btn-sm btn-success" value="<?php echo e(__('office.job.apply')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                        </form>
                    </div>
                    <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="1">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="1">redo</button>
                    </div>
                </div>

                <div class="offers-jobs" data-type="all-offers">
                    <?php ($i = 0); ?>
                    <?php $__currentLoopData = $jobOffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="offers-data  <?php if($i == 1): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('teams.show',['team' => $job])); ?>">
                            <div class="data-logo">
                                <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
                            </div>
                            <div class="data-club">
                                <p><?php echo e($job->name); ?></p>
                            </div>
                        </a>
                        <div class="data-league">
                            <p><b><?php echo e(__('office.job.league')); ?></b>:<?php if($job->league !== null): ?> <?php echo e($job->league->region); ?><?php endif; ?></p>
                        </div>
                        <div class="data-manager">
                            <p><b><?php echo e(__('office.job.manager')); ?></b>:<?php if($job->user !== null): ?> <?php echo e($job->user->name); ?><?php endif; ?></p>
                        </div>

                        <form method="POST" action="<?php echo e(route('team.application', ['id' => $job->id])); ?>">
                            <input type="submit" class="btn btn-sm btn-success" value="<?php echo e(__('office.job.apply')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                        </form>
                    </div>
                    <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="offers-controls">
                        <button class="material-icons" id="previousOffer" data-number="2">undo</button>
                        <button class="material-icons" id="nextOffer" data-number="2">redo</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php endif; ?>
</section><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/jobs.blade.php ENDPATH**/ ?>