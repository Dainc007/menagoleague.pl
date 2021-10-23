<section class="messages-text">
    <div class="messages-chat">
        <?php echo $__env->make('office.messages.inc.playerChat.playerChatMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <div class="messages-inbox hidden">
        <?php echo $__env->make('office.messages.inc.inbox.received.receivedMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('office.messages.inc.inbox.sent.sentMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="messages-notifications hidden">
        <?php echo $__env->make('office.messages.inc.notifications.notificationsMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/text.blade.php ENDPATH**/ ?>