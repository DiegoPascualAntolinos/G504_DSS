<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>
<<<<<<< HEAD

=======
    <div class="container">
            $table->increments('id');
            $table->double('precio');
            $table->string('nombre');
            $table->date('fechaViaje');
            $table->string('origen');
            $table->string('destino');
            $table->date('fechaFinOferta');
    </div>

  
>>>>>>> 2ab8cb913e6385b951443d565472add0e03df988


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>