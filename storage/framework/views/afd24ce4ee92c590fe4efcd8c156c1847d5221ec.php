<div class="content">
  <section class="league-news">
    <div class="league-news-h">
      <h2><?php echo e(__('home.news.header')); ?></h2>

      <div class="league-news-devices">
        <a href="#"><img src="./images/xbox-icon.svg" alt="Xbox" /></a>
        <a href="#"><img src="./images/playstation-icon.svg" alt="Playstation" /></a>
        <a href="#"><img src="./images/pc-icon.svg" alt="PC" /></a>
      </div>
    </div>

    <div class="league-news-container">
      <?php if($articles !== null): ?>
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="league-news-item" data-toggle="modal" data-target="#exampleModalLong<?php echo e($article->id); ?>">
        <img class="league-news-item-img" src="<?php echo e(url('/images/'. rand(1,8) .'.png')); ?>" alt="" />
        <div class="league-news-item-shadow">
          <p class="league-news-item-p"><?php echo e($article->title); ?></p>
        </div>
        

        <div class="modal fade" id="exampleModalLong<?php echo e($article->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"><?php echo e($article->title); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="<?php echo e(url('/images/6.png')); ?>" alt="" />
                <h5><span>Source: <small>Sky Sports Menago </small></span>  <small>02.08.2021r</small></h5>

                <p> <?php echo e($article->content); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
    <a href="" class="btn btn-w-border btn-allNews responsive-btn-allNews"><?php echo e(__('home.news.moreNews')); ?></a>
  </section>

  <aside class="read-more">
    <h2><?php echo e(__('home.news.readMore')); ?></h2>

    <div class="read-more-container">
      <?php $__currentLoopData = $oldArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <div class="read-more-item">
        <img class="read-more-item-img" src="<?php echo e(url('/images/'. rand(1,8) .'.png')); ?>" alt="" />
        <div class="read-more-item-text">
          <p>24.07.2021</p>

          <a class="read-more-item-text-a" href=""><?php echo e($article->title); ?>.</a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <a href="<?php echo e(route('article.index')); ?>" class="btn btn-w-border btn-allNews"><?php echo e(__('home.news.moreNews')); ?></a>
  </aside>
</div><?php /**PATH /Users/daniel/Documents/GitHub/Menagoleague.pl/resources/views/home/inc/news.blade.php ENDPATH**/ ?>