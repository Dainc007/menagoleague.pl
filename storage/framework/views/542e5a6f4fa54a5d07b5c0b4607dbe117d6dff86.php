<div class="season-cleanSheets">
    <h2><?php echo e(__('season.sheets')); ?></h2>

    <div class="topsAndCards-info">
        <div class="legend">
            <img src="<?php echo e(url('/images/cleansheets-icon.svg')); ?>" alt="">
        </div>
    </div>

    <div class="topsAndCards-container">
        <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="topAndCards-item">
                <p class="id"><?php echo e($i); ?></p>
                <div class="name">
                    <img src="/images/shields/<?php echo e(rand(1, 8)); ?>.png" alt="">
                    <p>Nazwa piłkarza</p>
                </div>
                <p class="score"><?php echo e(rand(1, 100)); ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php /**PATH /Users/daniel/Documents/GitHub/Menagoleague.pl/resources/views/season/inc/cleanSheets.blade.php ENDPATH**/ ?>