<!--
<?php $__env->startSection('title'); ?>
     <?php echo app('translator')->get('Remitos'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo app('translator')->get('Remitos'); ?></h1>
            <div class="section-header-breadcrumb">
             
                 <a href="<?php echo e(route('productos.pdf')); ?>" class="btn btn-outline-primary mr-2 "><?php echo app('translator')->get('Agregar'); ?> <?php echo e(__('PDF')); ?></a>
        
                <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-outline-primary mr-2"><?php echo app('translator')->get('Agregar'); ?></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                <?php echo $__env->make('productos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>*/
            </div>
       </div>
   </div>
    
    </section>
<?php $__env->stopSection(); ?>

-->


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/productos/index.blade.php ENDPATH**/ ?>