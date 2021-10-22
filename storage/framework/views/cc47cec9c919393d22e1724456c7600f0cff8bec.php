<div class="transfers-menu">
    <a class="btn <?php echo e(request()->segment(2) == 'transferListed' ? 'active' : ''); ?>" href="<?php echo e(route('transfers', 'transferListed')); ?>">Lista transferowa</a>
    <a class="btn <?php echo e(request()->segment(2) == 'loanListed' ? 'active' : ''); ?>" href="<?php echo e(route('transfers', 'loanListed')); ?>">Do wypożyczenia</a>
    <a class="btn <?php echo e(request()->segment(2) == 'freeAgents' ? 'active' : ''); ?>" href="<?php echo e(route('transfers', 'freeAgents')); ?>">Wolni Zawodnicy</a>
</div><?php /**PATH /Users/daniel/Documents/GitHub/Menagoleague.pl/resources/views/transfers/inc/transfers-menu.blade.php ENDPATH**/ ?>