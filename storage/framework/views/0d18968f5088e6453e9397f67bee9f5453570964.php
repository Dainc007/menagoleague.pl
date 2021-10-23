<div class="careerSubTab">
    <ul class="nav nav-tabs sub-tab" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all"
                aria-selected="true">Wszystko</a>
        </li>

        
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <?php echo $__env->make('player.inc.career.inc.careerAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/player/inc/career/careerSubTab.blade.php ENDPATH**/ ?>