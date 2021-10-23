

<?php $__env->startSection('title', 'Wiadomości'); ?>

<?php $__env->startSection('content'); ?>
<div class="messages-tabs">
    <div class="messages-player active">
       <a href="#">Player chat</a>
        <span class="notification">2</span>
    </div>
    <div class="messages-inbox">
        <a href="#">Inbox</a>
        <span class="notification">2</span>
    </div>
    <div class="messages-notifications">
        <a href="#">Notifications</a>
         <span class="notification">2</span>
     </div>
</div>
<div class="messages-content">
    <?php echo $__env->make('office.messages.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('office.messages.text', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/index.blade.php ENDPATH**/ ?>