<div class="central-menu">
    <a class="btn <?php echo e(request()->segment(1) == 'central' ? 'active' : ''); ?>"
        href="<?php echo e(route('central')); ?>"><?php echo e(__('nav.homeNav.central')); ?></a>
    <a class="btn <?php echo e(request()->segment(1) == 'teams' ? 'active' : ''); ?>"
        href="<?php echo e(route('team')); ?>"><?php echo e(__('nav.homeNav.team')); ?></a>
    <a class="btn <?php echo e(request()->segment(1) == 'transfers' ? 'active' : ''); ?>"
        href="<?php echo e(route('transfers', 'transferListed')); ?>"><?php echo e(__('nav.homeNav.transfers')); ?></a>
    <div class="central-menu-item-alert">
        <a class="btn <?php echo e(request()->segment(1) == 'office' ? 'active' : ''); ?>"
            href="<?php echo e(route('office')); ?>"><?php echo e(__('nav.homeNav.office')); ?></a>
        <span class="notification">2</span>
    </div>
    <a class="btn <?php echo e(request()->segment(1) == 'seasons' ? 'active' : ''); ?>"
        href="<?php echo e(route('season')); ?>"><?php echo e(__('nav.homeNav.season')); ?></a>
</div>

<div class="r-burger-button">
    <img class="btn central-burger-menu" src="<?php echo e(url('/images/burger-menu.svg')); ?>" alt="" />
</div>

<div class="responsive-central-menu" style="display: none">
    <div class="responsive-menu-content">
        

        <div class="r-menu">
            <a class="btn <?php echo e(request()->segment(1) == 'central' ? 'active' : ''); ?>"
                href="<?php echo e(route('login')); ?>">CENTRAL</a>
            <a class="btn <?php echo e(request()->segment(1) == 'teams' ? 'active' : ''); ?>"
                href="<?php echo e(route('team')); ?>">SQUAD</a>
            <a class="btn <?php echo e(request()->segment(1) == 'transfers' ? 'active' : ''); ?>"
                href="<?php echo e(route('transfers', 'transferListed')); ?>">TRANSFERS</a>
            <div class="r-central-menu-item-alert">
                <a class="btn <?php echo e(request()->segment(1) == 'office' ? 'active' : ''); ?>" href="">OFFICE</a>
                <span class="notification">2</span>
            </div>
            <a class="btn <?php echo e(request()->segment(1) == 'seasons' ? 'active' : ''); ?>"
                href="<?php echo e(route('season')); ?>">SEASON</a>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/inc/homeNav.blade.php ENDPATH**/ ?>