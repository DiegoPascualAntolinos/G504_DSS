<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1> ¡Reserva ya! </h1>
<hr>

<h1> 
</div> 

<?php if(count($errors) > 0): ?>

<div class="alert alert-danger">

    <ul>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li><?php echo e($error); ?></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

</div>

<?php endif; ?>

<form action="<?php echo e(route('store_reservation')); ?>" method="POST">

<?php echo e(csrf_field()); ?>


     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>  

    <div class="form-group"> <!-- id_flight -->
        <label for="id_flight" class="control-label">ID_Flight</label>
        <input type="string" class="form-control" id="id_flight" name="id_flight" placeholder="">
    </div>

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaSalida" class="control-label">Fecha Salida  </label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaSalida"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- fecha vuelta -->
        <label for="fechaLlegada" class="control-label">Fecha Llegada</label>
        <input type = "date" class"form-control" id="full_name_fin" name="fechaLlegada"  placeholder="DD/MM/AAAA" type="text">
    </div>  
    
    
    <div class="form-group"> <!-- precio -->
        <label for="cantidad" class="control-label">Cantidad de reservas</label>
        <input type="double" class="form-control" id="precio" name="cantidad" placeholder="#####">
    </div>    
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>     
    
</form>

<br/>
<br/>

<div class = "container">
    <table id = "example" data-toggle="table" class="table table-striped table-bordered tablesorter">

            <thead>
              <tr>
                <th>ID</th>
                <th>Fecha Salida</th>
                <th>Fecha Llegada</th>
                <th>Cantidad reservas</th>
              </tr>
            </thead>
              <tbody>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td> <?php echo e($reservation->id); ?> </td>
              <td> <?php echo e($reservation->fechaSalida); ?> </td>
              <td> <?php echo e($reservation->fechaLlegada); ?> </td>
              <td> <?php echo e($reservation->cantidad); ?> </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($reservations->links()); ?>

            </tbody>
            </table>
</div>


<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>