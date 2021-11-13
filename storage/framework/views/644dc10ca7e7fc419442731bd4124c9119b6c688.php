<section class="central-team-mailbox">
    <div class="headers-standings">
        <h2><?php echo e(__('central.assistant.title')); ?></h2>
    </div>

    <div class="central-team-mailbox-content">
        <!--        <div class="team-mailbox-sender">
            <img src="<?php echo e(url('/images/placeholder-person.svg')); ?>" alt="" />
            <div>
                <p class="team-mailbox-sender-name">Stefcio Drążyskała</p>
                <p class="team-mailbox-sender-proffesion"><?php echo e(__('central.assistant.job')); ?></p>
            </div>
        </div>-->
        <div class="central-team-mailbox-messages">
            <div class="track-team-mailbox-messages">

                <!-- jobApplications -->
                <?php if($user->jobApplications->where('status', 'accepted') && $user->jobApplications->where('status', 'accepted')->count() > 0): ?>
                    <div class="message-item">

                        <div class="team-mailbox-date"><?php echo e(now()); ?></div>

                        <div class="message">
                            <?php echo $__env->make('central.inc.jobsForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                    </div>
                <?php endif; ?>
                <!-- END -->

                <!-- Tutorial -->
                <?php if(!$user->isManager()): ?>
                    <div class="message-item">
                        <div class="team-mailbox-date"><?php echo e(now()); ?></div>

                        <div class="message">
                            <?php echo $__env->make('central.inc.tutorialForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- END -->

                <!-- Notifications -->
                <div class="message-item">
                    <?php if($user->notifications): ?>
                        <?php $__currentLoopData = $user->getNewNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <div class="menago-toast">
                                <div class="menago-toast-header">
                                    <div class="header">
                                        <p>
                                            <?php echo e(__($message->title, ['name' => $user->name])); ?>

                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aut numquam
                                            deleniti et voluptas enim, sint pariatur ipsum maiores sequi?
                                        </p>
                                    </div>

                                    <div class="date-close">
                                        <div class="date"><?php echo e($message->created_at); ?></div>
                                        <button class="close" data-id="<?php echo e($message->id); ?>"> &times; </button>
                                    </div>
                                </div>

                                <div class="menago-toast-body">
                                    <p>
                                        <?php echo e(__($message->content, ['name' => $user->name, 'message' => $message->message])); ?>

                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat aut at
                                        accusamus sapiente, voluptates necessitatibus dolore officia eius omnis saepe.
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <!-- END -->
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/assistant.blade.php ENDPATH**/ ?>