

<?php $__env->startSection('content'); ?>

    
    <div class="leagueWinnersHistory">
        <h1>Premier League</h1>

        <div class="leagueWinnersHistory__table">
            <div class="leagueWinnersHistory__table-legend">
                <div class="season">Season</div>
                <div class="winner">Winner</div>
            </div>
            <div class="leagueWinnersHistory__table-content">
                <?php for($i = 0; $i <= 10; $i++): ?>
                    <div class="item">
                        <div class="season">
                            <p>09.10.21r - 10.10.21r</p>
                        </div>
                        <div class="winner">
                            <img src="/images/shields/<?php echo e(rand(1, 8)); ?>.png" alt="">
                            <p>Manchester City</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.homeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/help/faq.blade.php ENDPATH**/ ?>