<?php if($user->notifications): ?>
<?php $__currentLoopData = $user->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="text-full " message-id="<?php echo e($message->id); ?>">
        <p><?php echo e($message->title); ?></p>

        <p><?php echo e($message->content); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/notifications/notificationsMessages.blade.php ENDPATH**/ ?>