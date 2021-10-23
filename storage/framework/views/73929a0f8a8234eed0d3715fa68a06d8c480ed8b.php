<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.882) 71.99%, rgba(206, 234, 211, 0.855) 87.12%, rgba(62, 73, 64, 0.9) 98.93%), url('/images/background.jpg');

            background-size: cover;
            min-height: 100vh;
        }

        .top-bar {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        @media (max-width: 1024px) {
            .top-bar {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <?php echo $__env->make('inc.mainNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-2">
            <!-- <?php if(Auth::check()): ?>
            <div class="container-fluid top-bar">
                <div>
                    <?php echo $__env->make('inc.userShield', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div>
                    <?php echo $__env->make('inc.userOptionsBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php endif; ?> -->

           <!--  <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(Auth::check()): ?>
                        <?php echo $__env->make('inc.homeNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div> -->

            <div class="container">
               <?php echo $__env->yieldContent('content'); ?>
            </div>

            <div class="container">
                <?php echo $__env->yieldContent('news'); ?>
            </div>

            <div class="container">
                <?php echo $__env->yieldContent('stats'); ?>
            </div>

            <div class="container">
                <?php echo $__env->yieldContent('gameplay'); ?>
            </div>

            <div class="container">
                <?php echo $__env->yieldContent('aboutgame'); ?>
            </div>
        </main>
    </div>
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/layouts/homeLayout.blade.php ENDPATH**/ ?>