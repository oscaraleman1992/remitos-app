
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Detalle del Remito'); ?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
        <h1><?php echo app('translator')->get('Detalle del Remito'); ?></h1>
        <div class="section-header-breadcrumb">
            <a href="<?php echo e(route('productos.index')); ?>"
                 class="btn btn-outline-primary mr-2 "><?php echo app('translator')->get('Volver'); ?></a>
        </div>
      </div>
   <?php echo $__env->make('stisla-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    <?php echo $__env->make('productos.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            </div>
    </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/productos/show.blade.php ENDPATH**/ ?>