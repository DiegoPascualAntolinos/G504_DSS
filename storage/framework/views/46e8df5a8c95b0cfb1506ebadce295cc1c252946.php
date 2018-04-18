<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1> Vuelos baratos </h1>
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

<form action="<?php echo e(route('store_flight')); ?>" method="POST">

<?php echo e(csrf_field()); ?>


  
    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio</label>
        <input type="string" class="form-control" id="precio" name="precio" placeholder="Introduce el precio">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaVuelo" class="control-label">Fecha vuelo</label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaVuelo"  placeholder="DD/MM/AAAA"  type="text">
    </div>  



    <div class="form-group"> <!-- plazas -->
        <label for="plazasDisponibles" class="control-label">Plazas disponibles</label>
        <input type="double" class="form-control" id="plazasDisponibles" name="plazasDisponibles" placeholder="Introduce las plazas disponibles">
    </div>

    <div class="form-group"> <!-- pais -->
        <label for="pais" class="control-label"> País origen</label>
        <input type="string" class="form-control" id="pais" name="pais" placeholder="Introduce el país de origen">
    </div>

    <div class="form-group"> <!-- provincia -->
        <label for="provincia" class="control-label">Provincia origen</label>
        <input type="string" class="form-control" id="provincia" name="provincia" placeholder="Introduce la provincia de origen">
    </div>

    <div class="form-group"> <!-- ciudad -->
        <label for="ciudad" class="control-label">Ciudad origen</label>
        <input type="string" class="form-control" id="ciudad" name="ciudad" placeholder="Introduce la ciudad de origen">
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Crear</button>
        
    </div>
</form>

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
              </td>

              <td>
              <a href="<?php echo e(route('edit_flight', ['flight' => $flight->id])); ?>"  class="btn btn-warning">Modificar</a>
              <p>
              <form action="<?php echo e(route('delete_flight', ['flight' => $flight->id])); ?>"  method = "POST">
            
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('DELETE')); ?>


              <button type="submit" class='btn btn-danger'>Delete</button>
    


              

              </form>
               </td>
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