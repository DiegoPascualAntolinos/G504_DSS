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
              </tr>
            </thead>
              <tbody>
            <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td> <?php echo e($offer->id); ?> </td>
              <td> <?php echo e($offer->nombre); ?> </td>
              <td> <?php echo e($offer->fechaViaje); ?> </td>
              <td> <?php echo e($offer->fechaFinOferta); ?> </td>
              <td> <?php echo e($offer->origen); ?> </td>
              <td> <?php echo e($offer->destino); ?> </td>
              <td> <?php echo e($offer->descripcion); ?> </td>
              <td> <?php echo e($offer->precio); ?> </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($offers->links()); ?>

            </tbody>
            </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>