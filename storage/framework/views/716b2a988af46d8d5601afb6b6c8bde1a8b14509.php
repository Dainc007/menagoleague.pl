<?php if(auth()->user()->team): ?>
    <user-shield 
        :team="'<?php echo e(auth()->user()->team->name); ?>'"
        :image='" <?php echo e(asset("storage/shields/" . auth()->user()->team->name . ".png")); ?>"'
        :username="'<?php echo e(auth()->user()->name); ?>'"
        :overall="100"
    />
<?php else: ?>
    <user-shield 
        :team=" '<?php echo e(__('home.noTeam')); ?>' "
        :image="'<?php echo e(asset('storage/shields/ml.png')); ?>'"
        :username="'<?php echo e(auth()->user()->name); ?>'"
        :overall="100"
    />
<?php endif; ?><?php /**PATH /Users/daniel/Documents/GitHub/Menagoleague.pl/resources/views/inc/userShield.blade.php ENDPATH**/ ?>