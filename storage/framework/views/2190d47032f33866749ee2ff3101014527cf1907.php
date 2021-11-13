<?php if(auth()->user()->team): ?>
    <user-shield
        :team="'<?php echo e(auth()->user()->team->name); ?>'"
        :image="'<?php echo e(env('TEAM_SRC')); ?><?php echo e(auth()->user()->team->sofifa_id); ?><?php echo e('.png'); ?>'"
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
<?php endif; ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/inc/userShield.blade.php ENDPATH**/ ?>