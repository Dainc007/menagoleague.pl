<div class="text-entry" player-id="1">
    <div class="player-info">
        <div class="player-overall">
            <p>OGL</p>
            <p class="overall">82</p>
        </div>

        <div class="player-photo"><img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>"></div>

        <div class="player-about">
            <p class="name">Silvan</p>
            <p class="surname">HEFTI</p>
            <p class="position">
                <span class="circle orange"></span>
                <span class="shortcut">PO</span>
                <span class="pos-type">Rotacyjny</span>
            </p>
        </div>
    </div>

    <div class="player-morals">
        <p>Morale</p>
        <span class="progress-bar" data-progress="<?php echo rand(1,100)?>%"></span>
        <p>Szczęśliwy</p>
    </div>
</div>

<?php for($i = 1; $i <= 10; $i++): ?>
    <div class="text-full <?php echo e($i === 1 ? 'active' : ''); ?>" message-id="<?php echo e($i); ?>">
        <?php for($j = 1; $j <= 10; $j++): ?>
            <div class="<?php echo e(rand(0, 1) ? 'receiver' : 'sender'); ?>">
                <p>
                    <?php echo e($j); ?>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at
                    accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia
                    nisi
                    quidem alias fugiat dignissimos!
                </p>
            </div>
        <?php endfor; ?>

        <div class="reply">
        </div>
    </div>
<?php endfor; ?>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/office/messages/inc/playerChat/playerChatMessages.blade.php ENDPATH**/ ?>