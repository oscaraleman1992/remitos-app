<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('marca', __('Marca').':'); ?>

    <p><?php echo e($producto->marca); ?></p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('modelo', __('Modelo').':'); ?>

    <p><?php echo e($producto->modelo); ?></p>
</div>

<!-- Precio Field -->
<div class="form-group">
    <?php echo Form::label('numero', __('Numero').':'); ?>

    <p><?php echo e($producto->numero); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('rack', __('Rack').':'); ?>

    <p><?php echo e($producto->rack); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('cable', __('Cable').':'); ?>

    <p><?php echo e($producto->cable); ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', __('Fecha de Creación').':'); ?>

    <p><?php echo e($producto->created_at); ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', __('Ultima Actualización').':'); ?>

    <p><?php echo e($producto->updated_at); ?></p>
</div>

<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/productos/show_fields.blade.php ENDPATH**/ ?>