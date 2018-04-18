<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>
<div class="jumbotron text-center">
  <h1>Ajustes de perfil</h1>
  <p>Aqui ejemplificar como se dispone la informacion de los viajes</p>
</div>
<p class="bg-warning text-white">
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span> 
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
    <span class="glyphicon glyphicon-download"></span>
</p>


<div class="form-group">
  <label for="usr">Name: <kbd>Nombre actual: Nombre apellido1 Apellido2</kbd></label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Password: <kbd>Contraseña actual:  </kbd>
    <a class="btn btn-primary" href="http://i0.kym-cdn.com/photos/images/newsfeed/000/096/044/trollface.jpg?1296494117" role="button">Mostrar contraseña</a>
  </label>
  <input type="password" class="form-control" id="pwd">
</div> 
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.profilelayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>