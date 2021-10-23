<div class="dropdown-menu" aria-labelledby="dropdown<?php echo e($player->id); ?>">
    <?php if($type !== 'freeAgents'): ?>
    <a class="dropdown-item" href="<?php echo e(route('transfers.negotiate', ['id' => $player->id,
        'type' => $type,
        'recipient' => 'team'
        ])); ?>">Negocjuj z Klubem</a>
    <?php endif; ?>
    <a class="dropdown-item" href="<?php echo e(route('transfers.negotiate', ['id' => $player->id,
        'type' => $type,
        'recipient' => 'player'
        ])); ?>">Negocjuj z piłkarzem</a>
</div><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/forms/actions.blade.php ENDPATH**/ ?>