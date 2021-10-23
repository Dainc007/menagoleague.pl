<section class="central-team-mailbox">
    <div class="headers-standings">
        <h2><?php echo e(__('central.assistant.title')); ?></h2>
    </div>

    <div class="central-team-mailbox-content">
        <div class="team-mailbox-sender">
            <img src="<?php echo e(url('/images/placeholder-person.svg')); ?>" alt="" />
            <div>
                <p class="team-mailbox-sender-name">Stefcio Drążyskała</p>
                <p class="team-mailbox-sender-proffesion"><?php echo e(__('central.assistant.job')); ?></p>
            </div>
        </div>
        <div class="central-team-mailbox-messages">
            <div class="track-team-mailbox-messages">
                <!-- Notifications -->
                <div class="message-item">
                    <?php if($user->notifications): ?>
                    <?php $__currentLoopData = $user->getNewNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="team-mailbox-date"><?php echo e(now()); ?></div>

                    <div class="message" id="message<?php echo e($message->id); ?>">
                        <b><?php echo e(__($message->title, ['name' => $user->name])); ?></b><br>
                        <?php echo e(__($message->content, ['name' => $user->name])); ?>

                        <button class="confirm btn" data-id="<?php echo e($message->id); ?>">Oznacz jako przeczytane</button>
                    </div>

                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <!-- END -->

                <!-- Tutorial -->
                <div class="message-item">
                    <div class="team-mailbox-date"><?php echo e(now()); ?></div>

                    <div class="message">
                        <?php echo $__env->make('central.inc.tutorialForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <!-- END -->


            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/assistant.blade.php ENDPATH**/ ?>