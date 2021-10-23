<?php for($i = 1; $i < 10; $i++): ?>
    <div class="text-full <?php echo e($i === 1 ? 'active' : ''); ?>" message-id="<?php echo e($i); ?>">
        <p>Good Morning, Boss <?php echo e($i); ?></p>

        <p>Lionel Messi has arrived to your stadium.</p>

        <p>We are so happy for this success, I wish you and this footballer the best!</p>
    </div>
<?php endfor; ?>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/notifications/notificationsMessages.blade.php ENDPATH**/ ?>