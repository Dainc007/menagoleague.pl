<?php for($i = 1; $i <= 10; $i++): ?>
    <div class="text-full <?php echo e($i === 1 ? 'active' : ''); ?>" received-message-id="<?php echo e($i); ?>">
        <p>Good Morning, Boss <?php echo e($i); ?></p>

        <?php for($j = 1; $j < 5; $j++): ?>
            <p>
                Received
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit nulla dolor molestiae repellendus
                doloremque consequatur ullam facilis quod explicabo ex quaerat, id modi minus at impedit animi ipsam
                libero dolorum?
            </p>
        <?php endfor; ?>

        <div class="accept">
            <button>Przejdź do ...</button>
        </div>
    </div>
<?php endfor; ?>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/inbox/received/receivedMessages.blade.php ENDPATH**/ ?>