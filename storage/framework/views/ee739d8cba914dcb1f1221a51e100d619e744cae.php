
<div class="table-responsive">
    <table class="table" id="receptores-table">
        <div class="d-md-flex justify-content-md-end">
            <form action="<?php echo e(route('receptores.index')); ?>" method="GET">
            <div class="col-sm-2 ">
                <input type="text" class="form-control" name="busqueda">
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
            </form>
        </div>
            <thead>
                <tr>
            <th><?php echo app('translator')->get('Organismo'); ?></th>
            <th><?php echo app('translator')->get('Reparticion'); ?></th>
            <th><?php echo app('translator')->get('Dependencia'); ?></th>
            <th><?php echo app('translator')->get('Domicilio'); ?></th>

                 
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $receptores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receptor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($receptor->organismo); ?></td>
                <td><?php echo e($receptor->reparticion); ?></td>
                <td><?php echo e($receptor->dependencia); ?></td>
                <td><?php echo e($receptor->domicilio); ?></td>
                           <td class=" text-center">
                               <?php echo Form::open(['route' => ['receptores.destroy', $receptor->id], 'method' => 'delete']); ?>

                               <div class='btn-group'>
                                   <a href="<?php echo route('receptores.show', [$receptor->id]); ?>" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                                   <a href="<?php echo route('receptores.edit', [$receptor->id]); ?>" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                                   <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('Desea eliminar el registro?').'")']); ?>

                               </div>
                               <?php echo Form::close(); ?>

                           </td>
                       </tr>
                </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
  <table class="table" id="receptores-table">

        <thead>
            <tr>
        <th><?php echo app('translator')->get('Organismo'); ?></th>
        <th><?php echo app('translator')->get('Reparticion'); ?></th>
        <th><?php echo app('translator')->get('Dependencia'); ?></th>
        <th><?php echo app('translator')->get('Domicilio'); ?></th>
        <th><?php echo app('translator')->get('Id'); ?></th>

             
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $receptores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receptor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($receptor->organismo); ?></td>
            <td><?php echo e($receptor->reparticion); ?></td>
            <td><?php echo e($receptor->dependencia); ?></td>
            <td><?php echo e($receptor->domicilio); ?></td>
            <td><?php echo e($receptor->id); ?></td>
                       <td class=" text-center">
                           <?php echo Form::open(['route' => ['receptores.destroy', $receptor->id], 'method' => 'delete']); ?>

                           <div class='btn-group'>
                               <a href="<?php echo route('receptores.show', [$receptor->id]); ?>" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="<?php echo route('receptores.edit', [$receptor->id]); ?>" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('Desea eliminar el registro?').'")']); ?>

                           </div>
                           <?php echo Form::close(); ?>

                       </td>
                   </tr>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
             <div class="card-body">
                <?php echo e($receptores->links()); ?>

              </div>
    </div><?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/receptores/table.blade.php ENDPATH**/ ?>