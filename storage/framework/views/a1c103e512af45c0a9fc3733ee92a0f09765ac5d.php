<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        .user-info__logo img {
            max-width: 80px;
            background-color: rgba(218, 221, 251, 0.5);
        }

        .user-info__team-and-name {
            font-size: 18px;
            -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
            /* color */
            color: #5079A3;
            background-color: rgba(218, 221, 251, 0.5);
        }

        .user-morale {
            font-size: 2.6rem;
            border-radius: 0px 60px 60px 0px;
            /* color */
            background-color: rgba(157, 158, 175, 0.5);
            color: #FFFFFF;
        }

        .home-nav {
            background-color: #5079A3;
        }

        .main-nav__item.active {
            background-color: lightblue;
            border-bottom: 2px solid #EE6677;
        }

        .main-nav__item.active:hover span {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="app">
        <?php echo $__env->make('inc.mainNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-4">
            <?php if(Auth::check()): ?>
            <div class="container">
                <?php echo $__env->make('inc.userShield', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="container">
                <?php echo $__env->make('inc.userOptionsBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php endif; ?>

            <div class="container central-menu-container">
                <?php if(Auth::check()): ?>
                <?php echo $__env->make('inc.homeNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>

            <div class="container">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>

            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {

$('.confirm').click(function() {

    var notificationId = $(this).data("id");

    $.ajax({
method: "POST",
url: "<?php echo e(route('notifications.markAsSeen')); ?>",
data: { 
  id: notificationId,
}
})
.done(function( msg ) {
$('#message' + notificationId).css('display', 'none');
});
    
});

});
        <?php echo $__env->yieldContent('javascript'); ?>
    </script>
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/layouts/app.blade.php ENDPATH**/ ?>