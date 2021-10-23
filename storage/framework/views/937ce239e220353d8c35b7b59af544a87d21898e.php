<?php for($i = 1; $i <= 10; $i++): ?>
    <div class="message <?php echo e($i === 1 ? 'message active' : 'message'); ?>" message-id="<?php echo e($i); ?>">
        <div class="message-logo">
            <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
        </div>

        <div class="message-details">
            <div class="title"><span>David Beckham</span></div>

            <div class="info">
                <span><?php echo e(Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')); ?></span>
            </div>
        </div>

        <div class="message-date"><span>16.08</span></div>
    </div>
<?php endfor; ?>

<div class="messages-controls">
    <a href="#" class="disabled">
        <span class="material-icons">skip_previous</span>
        Poprzednia strona
    </a>
    <a href="#">
        Następna strona
        <span class="material-icons">skip_next</span>
    </a>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/playerChat/playerChatList.blade.php ENDPATH**/ ?>