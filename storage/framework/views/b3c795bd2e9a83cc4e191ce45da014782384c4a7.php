
<?php $__env->startSection('title'); ?>
    Recuperar Contraseña
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card-primary">
        <div class="card-header"><h4>Recuperar Contraseña</h4></div>

        <div class="card-body">
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                           name="email" tabindex="1" value="<?php echo e(old('email')); ?>" autofocus required>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        ¿Recordó su información de inicio de sesión? <a href="<?php echo e(route('login')); ?>">Iniciar sesión</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>