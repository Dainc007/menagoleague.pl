<div class="inbox-tabs">
    <div class="inbox-received">
        <a class="activeTab" message-type="received" href="#">Inbox</a>
    </div>
    <div class="inbox-sent">
        <a message-type="sent" href="#">Sent</a>
    </div>
    <div class="inbox-create">
        <a href="#">Send message</a>
    </div>
</div>

<?php echo $__env->make('office.messages.inc.inbox.received.receivedList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('office.messages.inc.inbox.sent.sentList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/inbox/inbox.blade.php ENDPATH**/ ?>