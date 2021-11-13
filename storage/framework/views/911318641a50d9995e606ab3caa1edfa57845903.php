<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="logo" href="<?php echo e(route('home')); ?>">
            <img src="/images/logo-normal-classic.svg" alt="">
        </a>

        <div class="menu">
            <div class="dropdown">
                <?php if(!Auth::user()): ?>
                    <a href="/#about" class="dropdown-link">
                        <?php echo e(__('nav.mainNav.whatAreWe')); ?>

                    </a>
                    <?php else: ?>
                    <a href="<?php echo e(route('central')); ?>" class="dropdown-link">
                        Centrala
                    </a>
                    <?php endif; ?>
            </div>
            <div class="dropdown">

                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('nav.mainNav.tablesAndFixtures')); ?>

                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">

                    <?php $__currentLoopData = $activeCompetitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('competition.show', $value ?? '0')); ?>"><?php echo e(__('nav.mainNav.' . $key)); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('nav.mainNav.society')); ?>

                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.facebook.com/groups/230246767524306"
                        target="_blank"><?php echo e(__('nav.mainNav.fbGroup')); ?></a>
                    <a class="dropdown-item" href="https://www.facebook.com/MenagoLeague"
                        target="_blank"><?php echo e(__('nav.mainNav.fbFanPage')); ?></a>
                    <a class="dropdown-item" href="https://discord.gg/w73uDUjse8"
                        target="_blank"><?php echo e(__('nav.mainNav.discord')); ?> </a>
                    <a class="dropdown-item" href="<?php echo e(route('contact')); ?>"><?php echo e(__('nav.mainNav.admin')); ?></a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('nav.mainNav.help')); ?>

                    <span class="material-icons">arrow_drop_down</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(route('rules')); ?>"> <?php echo e(__('nav.mainNav.rules')); ?></a>
                    <a class="dropdown-item" href="<?php echo e(route('faq')); ?>"> <?php echo e(__('nav.mainNav.FAQ')); ?></a>
                </div>
            </div>
        </div>
        <div class="nav-auth dropdown">
            <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn"><?php echo e(__('Logowanie')); ?></a>
                <?php endif; ?>

                <?php if(Route::has('register')): ?>
                    <a class="btn btn-w-border" href="<?php echo e(route('register')); ?>"><?php echo e(__('Rejestracja')); ?></a>
                <?php endif; ?>
            <?php else: ?>
                <a class="dropdown-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><?php echo e(auth()->user()->name); ?> <span class="material-icons"> arrow_drop_down
                    </span></a>

                <div class="dropdown-menu">
                    <a href="<?php echo e(route('user.account')); ?>"><?php echo e(__('nav.settings')); ?></a>
                    <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <?php echo e(__('nav.logout')); ?>

                    </a>

                </div>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            <?php endif; ?>
        </div>

        <img class="btn burger-menu" src="/images/burger-menu.svg" alt="" />

        <div class="responsive-menu" style="display: none">
            <div class="container">
                <div class="responsive-menu-content">
                    <div class="responsive-menu-logo">
                        <a href="./Central/" class="logo"><img src="/images/logo-normal-classic.svg"
                                alt="" /></a>

                        <img class="btn close-burger-menu" src="/images/close-burger-menu.svg" alt="" />
                    </div>

                    <div class="r-menu">
                        <div class="r-dropdown">
                            <?php if(!Auth::user()): ?>
                                <a href="/#about" class="dropdown-link">
                                    <?php echo e(__('nav.mainNav.whatAreWe')); ?>

                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(route('central')); ?>" class="dropdown-link">
                                    Centrala
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="r-dropdown">
                            <button class="btn btn-r-menu r-dropdown-link" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><?php echo e(__('nav.mainNav.tablesAndFixtures')); ?><span
                                    class="material-icons"> arrow_right</span></button>
                            <div class="r-dropdown-menu">
                                <a href="<?php echo e(route('competition.show', 1)); ?>"><?php echo e(__('nav.mainNav.england')); ?></a>
                                <a href="<?php echo e(route('competition.show', 1)); ?>"><?php echo e(__('nav.mainNav.spain')); ?></a>
                                <a href="<?php echo e(route('competition.show', 1)); ?>"><?php echo e(__('nav.mainNav.poland')); ?></a>
                                <a href="<?php echo e(route('competition.show', 1)); ?>"><?php echo e(__('nav.mainNav.italy')); ?></a>
                                <a href="<?php echo e(route('competition.show', 1)); ?>"><?php echo e(__('nav.mainNav.champions')); ?></a>
                                <a href="<?php echo e(route('competition.show', 1)); ?>"><?php echo e(__('nav.mainNav.europe')); ?></a>
                            </div>
                        </div>
                        <div class="r-dropdown">
                            <button class="btn btn-r-menu r-dropdown-link" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><?php echo e(__('nav.mainNav.society')); ?><span class="material-icons">
                                    arrow_right </span></button>
                            <div class="r-dropdown-menu">
                                <a class="dropdown-item" href="https://www.facebook.com/groups/230246767524306"
                                    target="_blank"><?php echo e(__('nav.mainNav.fbGroup')); ?></a>
                                <a class="dropdown-item" href="https://www.facebook.com/MenagoLeague"
                                    target="_blank"><?php echo e(__('nav.mainNav.fbFanPage')); ?></a>
                                <a class="dropdown-item"
                                    href="https://discord.com/invite/3Jkp3YcU?utm_source=Discord%20Widget&utm_medium=Connect"
                                    target="_blank"><?php echo e(__('nav.mainNav.discord')); ?> </a>
                                <a class="dropdown-item" href="#admin"><?php echo e(__('nav.mainNav.admin')); ?></a>
                            </div>
                        </div>

                        <div class="r-dropdown">
                            <button class="btn btn-r-menu r-dropdown-link" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(__('nav.mainNav.help')); ?> <span class="material-icons">arrow_right
                                </span></button>
                            <div class="r-dropdown-menu">
                                <a class="dropdown-item" href="#"> <?php echo e(__('nav.mainNav.rules')); ?></a>
                                <a class="dropdown-item" href="#"> <?php echo e(__('nav.mainNav.FAQ')); ?></a>
                            </div>
                        </div>

                        <hr />

                        <div class="r-nav-auth">
                            <?php if(auth()->guard()->guest()): ?>

                                <?php if(Route::has('login')): ?>
                                    <a href="<?php echo e(route('login')); ?>" class="btn"><?php echo e(__('Logowanie')); ?></a>
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                    <a class="btn btn-w-border"
                                        href="<?php echo e(route('register')); ?>"><?php echo e(__('Rejestracja')); ?></a>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="r-nav-auth-logged-user">
                                    <a class="r-nav-auth-logged-user-nickname" href="">Nickname </a>
                                    <div class="r-nav-auth-logged-user-settings">
                                        <a href="<?php echo e(route('user.account')); ?>"><span class="material-icons">
                                                manage_accounts </span> <?php echo e(__('nav.settings')); ?></a>
                                        <a href=""><span class="material-icons"> logout </span> Logout</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/inc/mainNav.blade.php ENDPATH**/ ?>