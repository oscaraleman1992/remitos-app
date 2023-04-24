<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img class="logo"  src="https://seguimiento.dpt.gba.gob.ar/img\logo_gba_footer_blanco.svg" alt="" height="60px">
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="" class="small-sidebar-text">
            <img class="logo"  src="https://seguimiento.dpt.gba.gob.ar/img\logo_gba_footer_blanco.svg" alt="" height="30px">
        </a>
    </div>
    <ul class="sidebar-menu">
        <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
</aside>
<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>