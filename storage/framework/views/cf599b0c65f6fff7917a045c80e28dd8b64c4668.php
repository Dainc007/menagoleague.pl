<section class="messages-list">
    <div class="players-list">
        <?php echo $__env->make('office.messages.inc.playerChat.playerChatList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="inbox-list hidden">
        <?php echo $__env->make('office.messages.inc.inbox.inbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="notifications-list hidden">
        <?php echo $__env->make('office.messages.inc.notifications.notificationsList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/list.blade.php ENDPATH**/ ?>