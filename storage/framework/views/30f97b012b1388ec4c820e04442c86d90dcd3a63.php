

<?php $__env->startSection('title', config('app.name', 'Menago League')); ?>


<?php $__env->startSection('content'); ?>

    <div class="central-content">

        
        <?php echo $__env->make('central.inc.calendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->make('central.inc.assistant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->make('central.inc.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->make('central.inc.standings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/central.blade.php ENDPATH**/ ?>