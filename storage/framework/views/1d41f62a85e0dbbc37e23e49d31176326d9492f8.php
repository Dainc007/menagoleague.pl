<section class="results-slider">
  <div class="results-slider-content">
    <div class="track">
      <?php if($games !== null): ?>
      <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="results-slider-item">
        <div class="result">
          <div class="result-team">
            <img class="result-team-icon" src="<?php echo e(url('/images/shields/'. rand(1,8) .'.png')); ?>" alt="" />
            <span class="result-team-name"><?php echo e(Str::limit($game->host->name, 3, '')); ?></span>
            <span class="result-score"><?php echo e($game->host_goals); ?></span>
          </div>
          <div class="result-team">
            <img class="result-team-icon" src="<?php echo e(url('/images/shields/'. rand(1,8) .'.png')); ?>" alt="" />
            <span class="result-team-name"><?php echo e(Str::limit($game->visitor->name, 3, '')); ?></span>
            <span class="result-score"><?php echo e($game->visitor_goals); ?></span>
          </div>
          <hr />
          <p class="result-date"><?php echo e($game->date); ?></p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
  </div>
</section><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/home/inc/scoreline.blade.php ENDPATH**/ ?>