<section class="central-notifications">
    
    <ul class="nav nav-tabs headers-switch" id="myTab" role="tablist">
       
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="last-transfers-tab" data-toggle="tab" href="#last-transfers" role="tab"
                aria-controls="last-transfers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="big-transfers-tab" data-toggle="tab" href="#big-transfers" role="tab"
                aria-controls="big-transfers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
    </ul>


    <div class="tab-content notifications-content" id="myTabContent">

        
        

        
        <div class="central-notifications-content tab-pane fade active show" id="last-transfers" role="tabpanel"
            aria-labelledby="last-transfers-tab">
            <div class="header-w-tab">
                <h2><?php echo e(__('central.lastTransfers')); ?></h2>
            </div>

            <div class="notifications-content">
                <?php for($i = 0; $i < 15; $i++): ?>
                    <div class="notifications-content-item">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="">
                        <div>
                            <p><?php echo e(rand(1000, 100000)); ?> <i>M$</i></p>
                            <img src="<?php echo e(url('/images/arrow.svg')); ?>" alt="">
                            <p>J. Guilavogui </p>
                        </div>
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="">
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        
        <div class="central-notifications-content tab-pane fade" id="big-transfers" role="tabpanel"
            aria-labelledby="big-transfers-tab">
            <div class="header-w-tab">
                <h2><?php echo e(__('central.bigTransfers')); ?></h2>
            </div>

            <div class="notifications-content">
                <?php for($i = 0; $i < 15; $i++): ?>
                    <div class="notifications-content-item">
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="">
                        <div>
                            <p><?php echo e(rand(1000000, 100000000)); ?> <i>M$</i></p>
                            <img src="<?php echo e(url('/images/arrow.svg')); ?>" alt="">
                            <p>J. Guilavogui </p>
                        </div>
                        <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>" alt="">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/notifications.blade.php ENDPATH**/ ?>