<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="lastMatches-tab" data-toggle="tab" href="#lastMatches" role="tab"
            aria-controls="lastMatches" aria-selected="true">Home</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career"
            aria-selected="false">Profile</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="transfers-tab" data-toggle="tab" href="#transfers" role="tab" aria-controls="transfers"
            aria-selected="false">Contact</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="lastMatches" role="tabpanel" aria-labelledby="lastMatches-tab">
        <?php echo $__env->make('player.inc.lastMatches', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
        <?php echo $__env->make('player.inc.career', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="tab-pane fade" id="transfers" role="tabpanel" aria-labelledby="transfers-tab">
        <?php echo $__env->make('player.inc.transfers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/inc/players.blade.php ENDPATH**/ ?>