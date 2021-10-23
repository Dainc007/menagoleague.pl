<section class="results-slider">
  <div class="results-slider-content">
    <div class="track">
      <?php for($i=1;$i<=20;$i++): ?> 
        <div class="results-slider-item">
          <div class="result">
            <div class="result-team">
                <img class="result-team-icon" src="<?php echo e(url('/images/shields/6.png')); ?>" alt="" />
                <span class="result-team-name">T01</span>
                <span class="result-score"><?php echo rand(0,9)?></span>
            </div>
            <div class="result-team">
                <img class="result-team-icon" src="<?php echo e(url('/images/shields/8.png')); ?>" alt="" />
                <span class="result-team-name">T02</span>
                <span class="result-score"><?php echo rand(0,9)?></span>
            </div>
            <hr />
            <p class="result-date">Today, 3 PM</p>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/inc/scoreline.blade.php ENDPATH**/ ?>