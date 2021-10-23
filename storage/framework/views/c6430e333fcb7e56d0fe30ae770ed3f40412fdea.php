<div class="squad-team-management">
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="status-tab" data-toggle="tab" href="#status" role="tab"
                aria-controls="status" aria-selected="true">
                <?php echo e(__('team.tabs.status')); ?>

            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="attributes-tab" data-toggle="tab" href="#attributes" role="tab"
                aria-controls="attributes" aria-selected="false">
                <?php echo e(__('team.tabs.attr')); ?>

            </a>
        </li>
    </ul>


    <div class="tab-content" id="myTabContent">        
        <?php echo $__env->make('team.inc.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('team.inc.attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/team/inc/teamManagement.blade.php ENDPATH**/ ?>