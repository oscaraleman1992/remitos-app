
<?php $__env->startSection('title'); ?>
    Iniciar Sesion
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card-primary">
        <div class="card-header"><h4>Inicio Sesion</h4></div>

        <div class="card-body">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger p-0">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input aria-describedby="emailHelpBlock" id="email" type="email"
                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
                           placeholder="Ingrese Email" tabindex="1"
                           value="<?php echo e((Cookie::get('email') !== null) ? Cookie::get('email') : old('email')); ?>" autofocus
                           required>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Contraseña</label>
                        <div class="float-right">
                            <a href="<?php echo e(route('password.request')); ?>" class="text-small">
                                Olvidaste la Contraseña?
                            </a>
                        </div>
                    </div>
                    <input aria-describedby="passwordHelpBlock" id="password" type="password"
                           value="<?php echo e((Cookie::get('password') !== null) ? Cookie::get('password') : null); ?>"
                           placeholder="Ingrese Contraseña"
                           class="form-control<?php echo e($errors->has('password') ? ' is-invalid': ''); ?>" name="password"
                           tabindex="2" required>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('password')); ?>

                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                               id="remember"<?php echo e((Cookie::get('remember') !== null) ? 'checked' : ''); ?>>
                        <label class="custom-control-label" for="remember">Recordarme</label>
                    </div>
                </div>

                <div class="registrarse">
                    <div>
                        <p>¿No tienes cuenta? <a href="<?php echo e(route('register')); ?>" class="text-small">Registrate</a></p>
                    </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Ingresar
                    </button>
                </div>
                <div class="login-brand">
                    <img src="https://seguimiento.dpt.gba.gob.ar/img\logo_gba_footer_blanco.svg" alt="" height="80px">
                </div>
            </form>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/auth/login.blade.php ENDPATH**/ ?>