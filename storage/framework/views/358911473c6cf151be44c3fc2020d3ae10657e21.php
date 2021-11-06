

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card register">
                <div class="card-header"><?php echo e(__('auth.register')); ?></div>
                <div class="card-body">

                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="device"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.device')); ?></label>

                            <div class="col-md-6 justify-content-center d-flex">
                                <div class="form-check form-check-inline register-radios mr-3">
                                    <input checked class="form-check-input" type="radio" name="device" id="device_xbox"
                                        value="xbox">
                                    <label for="device_xbox"><img src="./images/xbox-icon.svg" alt="xbox" /></label>
                                </div>

                                <div class="form-check form-check-inline register-radios mr-3">
                                    <input class="form-check-input" type="radio" name="device" id="device_playstation"
                                        value="playstation">
                                    <label for="device_playstation"><img src="./images/playstation-icon.svg"
                                            alt="playstation" /></label>
                                </div>

                                <div class="form-check form-check-inline register-radios mr-3">
                                    <input class="form-check-input" type="radio" name="device" id="device_pc" value="pc">
                                    <label for="device_pc"><img src="./images/pc-icon.svg" alt="PC" /></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="version">Posiadam FIFĘ w
                                wersji:</label>

                            <div class="col-md-6">
                                <select class="form-control <?php $__errorArgs = ['version'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="version"
                                    id="version" required>
                                    <option selected value="">Wybierz wersję</option>
                                    <option value="old-gen">Old-gen (Xbox One, Ps4) </option>
                                    <option value="next-gen">Next-gen (Xbox Series S|X, Ps5) </option>
                                    <option value="ultimate">Obie wersje (Edycja Ultimate i Ps5/Xbox Series S|X) </option>
                                </select>

                                <?php $__errorArgs = ['version'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.username')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name"
                                    placeholder="GamerTag, PSN lub nick Origin" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.email')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.pass')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required
                                    autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.confirm')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="recommendation"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.recommendation')); ?></label>

                            <div class="col-md-6">
                                <input id="recommendation" type="text" class="form-control" name="recommendation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center mb-3">
                                <small clas="text-center"><?php echo e(__('auth.recommendation.details')); ?></small>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="discord"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.discord')); ?></label>

                            <div class="col-md-6">
                                <input id="discord" type="text" class="form-control <?php $__errorArgs = ['discord'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="discord" value="<?php echo e(old('discord')); ?>" placeholder="np: SnaggyDainc#3572"
                                    autocomplete="discord" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook"
                                class="col-md-4 col-form-label text-md-right"><i><?php echo e(__('auth.fb')); ?></i></label>

                            <div class="col-md-6">
                                <input id="facebook" type="text"
                                    class="form-control <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="facebook"
                                    value="<?php echo e(old('facebook')); ?>" autocomplete="facebook">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="register" type="submit" class="btn btn-success bshadow">
                                    <?php echo e(__('auth.join')); ?>

                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <small><?php echo e(__('auth.statute.annoucement')); ?> <a href="<?php echo e(route('help.statute')); ?>"><?php echo e(__('auth.statute')); ?></a> i
                                    <a href="<?php echo e(route('privacy')); ?>"><?php echo e(__('auth.policy')); ?></a></small>
                            </div>
                        </div>

                </div>

                </form>

            </div>
        </div>
    </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/auth/register.blade.php ENDPATH**/ ?>