<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1> Las mejores ciudades para visitar </h1>
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

<form action="<?php echo e(route('store_offer')); ?>" method="POST">

<?php echo e(csrf_field()); ?>


<div class="form-group"> <!-- codigoPostal -->
        <label for="codigoPostal" class="control-label">Código postal</label>
        <input type="double" class="form-control" id="codigoPostal" name="codigo Postal" placeholder="Introduce el código postal">
    </div>
              
    
<div class="form-group"> <!-- codigoPostal -->
        <label for="provincia" class="control-label">País</label>
        <input type="double" class="form-control" id="provincia" name="Provincia" placeholder="Introduce el país">
    </div>

      

<div class="form-group"> <!-- codigoPostal -->
        <label for="provincia" class="control-label">Provincia</label>
        <input type="double" class="form-control" id="provincia" name="Provincia" placeholder="Introduce la provincia">
    </div>

      
<div class="form-group"> <!-- codigoPostal -->
        <label for="codigoPostal" class="control-label">Ciudad</label>
        <input type="double" class="form-control" id="codigoPostal" name="codigo Postal" placeholder="Introduce la ciudad">
    </div>       


    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
    
</form>


<div class = "container">
    <table id = "example" data-toggle="table" class="table table-striped table-bordered tablesorter">

            <thead>
              <tr>
                <th>ID</th>
                <th>Código postal</th>
                <th>País</th>
                <th>Provincia</th>
                <th>Ciudad</th>
              </tr>
            </thead>
              <tbody>
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td> <?php echo e($city->id); ?> </td>
              <td> <?php echo e($city->codigoPostal); ?> </td>
              <td> <?php echo e($city->pais); ?> </td>
              <td> <?php echo e($city->provincia); ?> </td>
              <td> <?php echo e($city->ciudad); ?> </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($cities->links()); ?>

            </tbody>
            </table>
</div>

<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>