
<?php $__env->startSection('title'); ?>
    Registrarse
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card-primary">
        <div class="card-header"><h4>Registro</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre y apellido:</label><span
                                    class="text-danger">*</span>
                            <input id="firstName" type="text"
                                   class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                   name="name"
                                   tabindex="1" placeholder="Nombre y Apellido" value="<?php echo e(old('name')); ?>"
                                   autofocus required>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('name')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label><span
                                    class="text-danger">*</span>
                            <input id="email" type="email"
                                   class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                   placeholder="Ingrese Email" name="email" tabindex="1"
                                   value="<?php echo e(old('email')); ?>"
                                   required autofocus>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label">Contraseña
                                :</label><span
                                    class="text-danger">*</span>
                            <input id="password" type="password"
                                   class="form-control<?php echo e($errors->has('password') ? ' is-invalid': ''); ?>"
                                   placeholder="Ingrese Contraseña" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('password')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation"
                                   class="control-label">Confirmar Contraseña:</label><span
                                    class="text-danger">*</span>
                            <input id="password_confirmation" type="password" placeholder="Confirmar Contraseña"
                                   class="form-control<?php echo e($errors->has('password_confirmation') ? ' is-invalid': ''); ?>"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('password_confirmation')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Registrarse
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Ya tienes una cuenta? <a
                href="<?php echo e(route('login')); ?>">Inicia sesión</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/auth/register.blade.php ENDPATH**/ ?>