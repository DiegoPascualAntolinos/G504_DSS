<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1> Es hora de volar </h1>
<hr>

<h1> 
</div> 

<form action="/vuelos" method="GET" role="search">
    <div class="input-group col-md-12">
        <input type="text" class="form-control input-lg" placeholder="Buscar" name="q">
        <span class="input-group-btn">
            <button class="btn btn-info btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </div>
</form>
<p>
<div class = "container">
    <table id = "example" data-toggle="table" class="table table-hover">

            <thead>
              <tr>
                <th>ID</th>
                <th>Precio</th>
                <th>Fecha vuelo</th>
                <th>Plazas Disponibles</th>
              </tr>


            </thead>
              <tbody>
            <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td> <?php echo e($flight->id); ?> </td>
              <td> <?php echo e($flight->precio); ?> </td>
              <td> <?php echo e($flight->fechaVuelo); ?> </td>
              <td> <?php echo e($flight->plazasDisponibles); ?> </td>
              

               </tr>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($flights->links()); ?>

            </tbody>
            </table>
</div>







<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>