<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

    

asdasd
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.profilelayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>