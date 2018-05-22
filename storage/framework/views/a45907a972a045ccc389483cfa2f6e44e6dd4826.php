<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1> Listado de usuarios.</h1>
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

<form action="<?php echo e(route('store_user')); ?>" method="POST">

<?php echo e(csrf_field()); ?>

  
</form>

<form action="/usuarios" method="GET" role="search">
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
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono</th>
               
              </tr>
            </thead>
              <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td> <?php echo e($user->id); ?> </td>
              <td> <?php echo e($user->dni); ?> </td>
              <td> <?php echo e($user->nombre); ?> </td>
              <td> <?php echo e($user->direccion); ?> </td>
              <td> <?php echo e($user->email); ?> </td>
              <td> <?php echo e($user->telefono); ?> </td>
             

              <td>

              <form action="<?php echo e(route('delete_user',['user' => $user->id])); ?>"method = "POST">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                
                <button type="submit" class='btn btn-danger'>Delete</button>

                </form>
               </td>
               </tr>
              </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($users->links()); ?>

            </tbody>
            </table>
</div>

<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>