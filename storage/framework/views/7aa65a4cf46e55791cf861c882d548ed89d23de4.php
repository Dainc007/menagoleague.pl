<div class="content content-mobile">
    <aside class="discord">
        <iframe src="https://discord.com/widget?id=785081091710517268&theme=dark" width="100%" height="100%"
            allowtransparency="true" frameborder="0"
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </aside>

    <div class="menagoleague-stats">
        <h2><?php echo e(__('home.stats.title')); ?></h2>

        <div class="menagoleague-stats-container">

            <div class="menagoleague-stats-content-item">
                <p class="menagoleague-stats-content-item-number"><?php echo e($numOfTeams ?? '0'); ?></p>
                <p class="menagoleague-stats-content-item-desc"><?php echo e(__('home.stats.teams')); ?></p>
            </div>

            <div class="menagoleague-stats-content-item">
                <p class="menagoleague-stats-content-item-number"><?php echo e($numOfUsers ?? '0'); ?></p>
                <p class="menagoleague-stats-content-item-desc"><?php echo e(__('home.stats.users')); ?></p>
            </div>

            <div class="menagoleague-stats-content-item">
                <p class="menagoleague-stats-content-item-number"><?php echo e($numOfGames ?? '0'); ?></p>
                <p class="menagoleague-stats-content-item-desc"><?php echo e(__('home.stats.games')); ?></p>
            </div>

            <div class="menagoleague-stats-content-item">
                <p class="menagoleague-stats-content-item-number"><?php echo e($numOfGoals ?? '0'); ?></p>
                <p class="menagoleague-stats-content-item-desc"><?php echo e(__('home.stats.goals')); ?></p>
            </div>

            <div class="menagoleague-stats-content-item menagoleague-stats-content-item-large">
                <p class="menagoleague-stats-content-item-number"><?php echo e($sumOfTransferFees ?? '0'); ?> M$</p>
                <p class="menagoleague-stats-content-item-desc"><?php echo e(__('home.stats.transfers')); ?></p>
            </div>

        </div>
        <p class="menagoleague-stats-p"><?php echo e(__('home.stats.since')); ?> <b>2018</b></p>
    </div>

    <aside class="discord">
        <iframe src="https://discord.com/widget?id=785081091710517268&theme=dark" width="100%" height="100%"
            allowtransparency="true" frameborder="0"
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </aside>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/home/inc/statsContainer.blade.php ENDPATH**/ ?>