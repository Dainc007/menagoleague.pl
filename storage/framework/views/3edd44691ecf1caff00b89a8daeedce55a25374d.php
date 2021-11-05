<section class="central-standings">
    
    <ul class="nav nav-tabs headers-switch" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="standings-tab" data-toggle="tab" href="#standings" role="tab"
                aria-controls="standings" aria-selected="true">
                <span class="material-icons"> radio_button_unchecked </span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="top-scorers-tab" data-toggle="tab" href="#top-scorers" role="tab"
                aria-controls="top-scorers" aria-selected="false">
                <span class="material-icons"> radio_button_unchecked</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="top-asists-tab" data-toggle="tab" href="#top-asists" role="tab"
                aria-controls="top-asists" aria-selected="false">
                <span class="material-icons">radio_button_unchecked</span>
            </a>
        </li>
    </ul>


    <div class="tab-content h-100" id="myTabContent">

        
        <div class="central-standings-content tab-pane fade active show" id="standings" role="tabpanel"
            aria-labelledby="standings-tab">
            <h2><?php echo e(__('central.standings.title')); ?></h2>



            <div class="central-standings-info-text">
                <div>
                    <div style="display: none">Icons made by <a href="https://www.flaticon.com/authors/dighital"
                            title="Dighital">Dighital</a> from <a href="https://www.flaticon.com/"
                            title="Flaticon">www.flaticon.com</a></div>
                    <img src="<?php echo e(url('/images/games-played-icon.svg')); ?>" alt="Games played icon" title="Games played"
                        class="mx-auto">
                </div>
                <div>
                    <img src="<?php echo e(url('/images/points-icon.svg')); ?>" alt="Points scored icon" title="Points scored"
                        class="mx-auto">
                </div>
            </div>
            <div class="standings-content">
                <?php if(!$biggestTransfers): ?>
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <div class="standings-item">
                            <p class="standings-item-id"><?php echo e($i); ?>.</p>
                            <img class="standings-item-img" src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>"
                                alt="" />
                            <p class="standings-item-name">Arsenal</p>
                            <p class="standings-item-scorePLD"><?php echo e(rand(0, 20)); ?></p>
                            <p class="standings-item-scorePTS"><?php echo e(rand(0, 20)); ?></p>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <div class="standings-content-placeholder">
                        <p>Chwilowo brak danych do wyświetlenia.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        
        <div class="central-standings-content tab-pane fade" id="top-scorers" role="tabpanel"
            aria-labelledby="top-scorers-tab">
            <h2><?php echo e(__('central.topScorers')); ?></h2>

            <div class="central-standings-info-text">
                <div>
                    <img src="<?php echo e(url('/images/goal-icon.svg')); ?>" alt="Goal icon" title="Goals">
                </div>
            </div>
            <div class="standings-content">

                <?php if(!$biggestTransfers): ?>
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <div class="standings-item">
                            <p class="standings-item-id"><?php echo e($i); ?>.</p>
                            <img class="standings-item-img"
                                src="https://fifastatic.fifaindex.com/FIFA21/images/players/5/158023.png" alt="" />
                            <p class="standings-item-name">Leo Messi</p>
                            <p class="standings-item-scorePLD"><?php echo e(rand(0, 20)); ?></p>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <div class="standings-content-placeholder">
                        <p>Chwilowo brak danych do wyświetlenia.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        
        <div class="central-standings-content tab-pane fade" id="top-asists" role="tabpanel"
            aria-labelledby="top-asists-tab">
            <h2><?php echo e(__('central.topAssists')); ?></h2>

            <div class="central-standings-info-text">
                <div>
                    <img src="<?php echo e(url('/images/asist-icon.svg')); ?>" alt="Assist icon" title="Assists">
                </div>
            </div>
            <div class="standings-content">

                <?php if(!$biggestTransfers): ?>
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <div class="standings-item">
                            <p class="standings-item-id"><?php echo e($i); ?>.</p>
                            <img class="standings-item-img"
                                src="https://fifastatic.fifaindex.com/FIFA21/images/players/5/158023.png" alt="" />
                            <p class="standings-item-name">Leo Messi</p>
                            <p class="standings-item-scorePLD"><?php echo e(rand(0, 20)); ?></p>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <div class="standings-content-placeholder">
                        <p>Chwilowo brak danych do wyświetlenia.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>



    
</section>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/standings.blade.php ENDPATH**/ ?>