<section class="central-advance">
    <div class="advance-headers">
        <h2>Calendar</h2>
        <span>MAR 2021</span>
    </div>

    <div class="advance-callendar">

        <div class="advance-callendar-day">
            <p>Mon
                <!-- <span>20:45</span> -->
            </p>
            <div>
                <p>26</p>
                <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
            </div>

            <span class="material-icons">swap_horiz</span>
        </div>

        <?php for($i = 27; $i < 30; $i++): ?>
            <div class="advance-callendar-day">
                <p>Mon
                    <!-- <span>20:45</span> -->
                </p>
                <div>
                    <p><?php echo e($i); ?></p>

                </div>

                <span class="material-icons">swap_horiz</span>
            </div>
        <?php endfor; ?>

        <div class="advance-callendar-day">
            <p>Mon<span>20:45</span></p>
            <div>
                <p>30</p>
                <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
            </div>

            <span class="material-icons">swap_horiz</span>
        </div>

    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/advance.blade.php ENDPATH**/ ?>