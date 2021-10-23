<div class="players">
    <ul class="nav nav-tabs main-tab" id="myTab" role="tablist" style="display: flex;">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab"
                aria-controls="details" aria-selected="true">Szczegóły</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="lastMatches-tab" data-toggle="tab" href="#lastMatches" role="tab"
                aria-controls="lastMatches" aria-selected="false">Ostatnie mecze</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career"
                aria-selected="false">Kariera</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="transfers-tab" data-toggle="tab" href="#transfers" role="tab"
                aria-controls="transfers" aria-selected="false">Transfery</a>
        </li>

        <img src="/images/menu.svg" alt="" class="responsive-tab-menu">
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade  show active" id="details" role="tabpanel" aria-labelledby="details-tab">
            <?php echo $__env->make('player.inc.details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="tab-pane fade" id="lastMatches" role="tabpanel" aria-labelledby="lastMatches-tab">
            <?php echo $__env->make('player.inc.lastMatches', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
            <?php echo $__env->make('player.inc.career.careerSubTab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="tab-pane fade" id="transfers" role="tabpanel" aria-labelledby="transfers-tab">
            <?php echo $__env->make('player.inc.transfers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/players.blade.php ENDPATH**/ ?>