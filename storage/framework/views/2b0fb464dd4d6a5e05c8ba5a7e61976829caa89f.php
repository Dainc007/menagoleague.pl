<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="rank-tab" data-toggle="tab" href="#rank" role="tab" aria-controls="rank"
            aria-selected="true">Gracze</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="rank-teams-tab" data-toggle="tab" href="#rank-teams" role="tab"
            aria-controls="rank-teams" aria-selected="false">Drużyny</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="rank-players-tab" data-toggle="tab" href="#rank-players" role="tab"
            aria-controls="rank-players" aria-selected="false">Piłkarze</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="rank" role="tabpanel" aria-labelledby="rank-tab">
        <?php echo $__env->make('.help.inc.ranking.rank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="tab-pane fade" id="rank-teams" role="tabpanel" aria-labelledby="rank-teams-tab">
        <?php echo $__env->make('.help.inc.ranking.rankTeams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="tab-pane fade" id="rank-players" role="tabpanel" aria-labelledby="rank-players-tab">
        <?php echo $__env->make('.help.inc.ranking.rankPlayers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views//help/inc/ranking/rankTabs.blade.php ENDPATH**/ ?>