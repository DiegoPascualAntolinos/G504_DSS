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

<form action="<?php echo e(route('update_offer', ['oferta' => $oferta->id])); ?>" method="POST">

<?php echo e(csrf_field()); ?>


<?php echo e(method_field('PUT')); ?>


  
    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio</label>
        <input type="double" class="form-control" id="precio" name="precio" placeholder="<?php echo e($oferta->precio); ?>">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="nombre" class="control-label">Nombre</label>
        <input type="string" class"form-control" id="nombre" name="nombre"  placeholder="<?php echo e($oferta->nombre); ?>"  type="text">
    </div>  



    <div class="form-group"> <!-- fechaViaje -->
        <label for="fechaViaje" class="control-label">Fecha viaje</label>
        <input type="date" class="form-control" id="fechaViaje" name="fechaViaje" placeholder="<?php echo e($oferta->fechaViaje); ?>">
    </div>

    <div class="form-group"> <!-- origen -->
        <label for="origen" class="control-label">Origen</label>
        <input type="string" class="form-control" id="origen" name="origen" placeholder="<?php echo e($oferta->origen); ?>">
    </div>

    <div class="form-group"> <!-- destino -->
        <label for="destino" class="control-label">Destino</label>
        <input type="string" class="form-control" id="destino" name="destino" placeholder="<?php echo e($oferta->destino); ?>">
    </div>

    <div class="form-group"> <!-- descripcion -->
        <label for="descripcion" class="control-label">Descripción</label>
        <input type="string" class="form-control" id="descripcion" name="descripcion" placeholder="<?php echo e($oferta->descripcion); ?>">
    </div>

    <div class="form-group"> <!-- fechaFinOferta -->
        <label for="fechaFinOferta" class="control-label">Fecha fin oferta</label>
        <input type="date" class="form-control" id="fechaFinOferta" name="fechaFinOferta" placeholder="<?php echo e($oferta->fechaFinOferta); ?>">
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>     
    
</form>



<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>