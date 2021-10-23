<div class="season-topAsists">
    <h2><?php echo e(__('season.asists')); ?></h2>

    <div class="topsAndCards-info">
        <div class="legend">
            <img src="<?php echo e(url('/images/asist-icon.svg')); ?>" alt="">
        </div>
    </div>

    <div class="topsAndCards-container">
        <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="topAndCards-item">
                <p class="id"><?php echo e($i); ?></p>
                <div class="name">
                    <div style="display: none">Icons made by <a href="" title="photo3idea_studio">photo3idea_studio</a>
                        from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                    <img src="/images/shields/<?php echo e(rand(1, 8)); ?>.png" alt="">
                    <p>Nazwa piłkarza</p>
                </div>
                <p class="score"><?php echo e(rand(1, 100)); ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/season/inc/topAsists.blade.php ENDPATH**/ ?>