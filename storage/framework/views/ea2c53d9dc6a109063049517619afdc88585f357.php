<!--<div class="table-responsive">
    <table class="table" id="productos-table">
        <div class="d-md-flex justify-content-md-end">
            <form action="<?php echo e(route('productos.index')); ?>" method="GET">
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
                <th><?php echo app('translator')->get('Marca'); ?></th>
        <th><?php echo app('translator')->get('Modelo'); ?></th>
        <th><?php echo app('translator')->get('Numero'); ?></th>
        <th><?php echo app('translator')->get('Rack'); ?></th>
        <th><?php echo app('translator')->get('Cable'); ?></th>
             
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($producto->marca); ?></td>
            <td><?php echo e($producto->modelo); ?></td>
            <td><?php echo e($producto->numero); ?></td>
            <td><?php echo e($producto->rack); ?></td>
            <td><?php echo e($producto->cable); ?></td>
                       <td class=" text-center">
                           <?php echo Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']); ?>

                           <div class='btn-group'>
                               <a href="<?php echo route('productos.show', [$producto->id]); ?>" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="<?php echo route('productos.edit', [$producto->id]); ?>" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
            <?php echo e($productos->links()); ?>

          </div>
</div>
-->

<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/productos/table.blade.php ENDPATH**/ ?>