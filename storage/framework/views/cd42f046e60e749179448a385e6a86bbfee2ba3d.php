<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('organismo', __('organismo').':'); ?>

    <?php echo Form::text('organismo', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('reparticion', __('reparticion').':'); ?>

    <?php echo Form::text('reparticion', null, ['class' => 'form-control']); ?>

</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dependencia', __('dependencia').':'); ?>

    <?php echo Form::text('dependencia', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('domicilio', __('domicilio').':'); ?>

    <?php echo Form::text('domicilio', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit(__('Guardar'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('receptores.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('Cancelar'); ?></a>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/receptores/fields.blade.php ENDPATH**/ ?>