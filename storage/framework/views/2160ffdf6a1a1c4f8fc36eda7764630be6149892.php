<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
<div class = "container">
    <table id = "example" data-toggle="table" class="table table-striped table-bordered tablesorter">

            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tbody>
            <?php $__currentLoopData = $clase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elegido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
               <td> <?php echo e($i = $elegido->id); ?> </td>
              <td> <?php echo e($elegido->nombre); ?> </td>
              <td> <?php echo e($elegido->monitor_id); ?> </td>
              <td> <?php echo e($elegido->fecha); ?> </td>
              <td> <?php echo e($elegido->horario); ?> </td>
              <td> <?php echo e($elegido->descripcion); ?> </td>
              <td> <?php echo e($elegido->precio); ?> </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php echo e($clase->links()); ?>

            </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>