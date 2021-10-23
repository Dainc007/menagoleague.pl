

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="full-calendar">
            <div class="calendar-display">
                <h2><?php echo e(__('central.calendar.title')); ?></h2>
                <h3><?php echo e(__('central.calendar.month.' . today()->format('M'))); ?></h3>
                <div class="calendar">
                    <div class="month-container">
                        <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="month-item"><?php echo e(__('central.calendar.day.' . $day)); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="day-container">

                        <?php $__currentLoopData = $calendar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="day-item <?php if(today()->month !== $day->month): ?>
                        day-item-disabled
                        <?php endif; ?>
                        <?php if($day == today()): ?>
                        current-day
                        <?php endif; ?>">
                                <p><?php echo e($day->format('d')); ?></p>
                                <?php if($fixtures !== null): ?>
                                    <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($game->date == $day->format('Y-m-d')): ?>
                                            <img src="<?php echo e(url('/images/shields/' . rand(1, 8) . '.png')); ?>">
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            <div class="calendar-forms">
                <form action="">
                    <h2>Przełóż mecz</h2>

                    <div class="form-group">
                        <label for="selectMatch">Wybierz mecz który chcesz przełożyć: </label>
                        <select class="custom-select" name="selectMatch" id="selectMatch">
                            <option selected disabled>Wybierz mecz:</option>
                            <?php for($i = 1; $i <= 10; $i++): ?>
                                <option>Lorem, ipsum dolor.</option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="changeDate">Wybierz nową date meczu:</label>
                        <input type="date" name="changeDate" id="changeDate">
                    </div>

                    <div class="form-group">
                        <label for="changeTime">Wybierz nową date meczu:</label>
                        <input type="time" name="changeTime" id="changeTime">
                    </div>

                    <button type="submit" name="changeMatchDate" value="changeMatchDate"
                        class="btn btn-success bshadow">Zaproponuj przełożenie meczu</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/central/inc/fullCalendar.blade.php ENDPATH**/ ?>