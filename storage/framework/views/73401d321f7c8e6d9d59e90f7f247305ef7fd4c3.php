
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Editar Remito'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0"><?php echo app('translator')->get('Editar Remito'); ?></h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="<?php echo e(route('receptores.index')); ?>"  class="btn btn-outline-primary mr-2 "><?php echo app('translator')->get('Volver'); ?></a>
                </div>
            </div>
  <div class="content">
              <?php echo $__env->make('stisla-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    <?php echo Form::model($receptor, ['route' => ['receptores.update', $receptor->id], 'method' => 'patch']); ?>

                                        <div class="row">
                                            <?php echo $__env->make('receptores.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>

                                    <?php echo Form::close(); ?>

                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/receptores/edit.blade.php ENDPATH**/ ?>