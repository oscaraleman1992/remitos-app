<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('organismo', __('Organismo').':'); ?>

    <p><?php echo e($receptor->organismo); ?></p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('reparticion', __('Reparticion').':'); ?>

    <p><?php echo e($receptor->reparticion); ?></p>
</div>

<!-- Precio Field -->
<div class="form-group">
    <?php echo Form::label('dependencia', __('Dependencia').':'); ?>

    <p><?php echo e($receptor->dependencia); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('domicilio', __('Domicilio').':'); ?>

    <p><?php echo e($receptor->domicilio); ?></p>
</div>



<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', __('Fecha de Creación').':'); ?>

    <p><?php echo e($receptor->created_at); ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', __('Ultima Actualización').':'); ?>

    <p><?php echo e($receptor->updated_at); ?></p>
</div>

<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/receptores/show_fields.blade.php ENDPATH**/ ?>