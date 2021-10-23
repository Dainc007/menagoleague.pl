<?php for($i = 0; $i <= 10; $i++): ?>
    <div class="message <?php echo e($i === 1 ? 'message active' : 'message'); ?>" message-type="received">
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
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/inbox/inbox/inboxList.blade.php ENDPATH**/ ?>