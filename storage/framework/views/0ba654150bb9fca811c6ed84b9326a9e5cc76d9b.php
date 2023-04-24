<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('marca', __('marca').':'); ?>

    <?php echo Form::text('marca', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('modelo', __('modelo').':'); ?>

    <?php echo Form::text('modelo', null, ['class' => 'form-control']); ?>

</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('numeor', __('numero').':'); ?>

    <?php echo Form::text('numero', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('rack', __('rack').':'); ?>

    <?php echo Form::text('rack', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('cable', __('cable').':'); ?>

    <?php echo Form::text('cable', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit(__('Guardar'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('Cancelar'); ?></a>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/productos/fields.blade.php ENDPATH**/ ?>