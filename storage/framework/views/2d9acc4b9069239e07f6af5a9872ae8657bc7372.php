<?php if($user->notifications): ?>
<?php $__currentLoopData = $user->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="message" message-id="<?php echo e($message->id); ?>">
        <div class="message-details">
            <div class="title"><span><?php echo e($message->title); ?></span></div>

            <div class="info">
                <span><?php echo e(Str::limit($message->content, 35)); ?></span>
            </div>
        </div>

        <div class="message-date"><span><?php echo e($message->created_at); ?></span></div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/notifications/notificationsList.blade.php ENDPATH**/ ?>