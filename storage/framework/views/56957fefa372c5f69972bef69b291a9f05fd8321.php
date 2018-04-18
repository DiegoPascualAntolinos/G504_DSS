<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>Have an Account?</h3>
              </div>
              <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#create" data-toggle="tab">Create User Account</a></li>
                    <li><a href="#create" data-toggle="tab">Create Company Account</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                      <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                          <div id="legend">
                            <legend class="">Login</legend>
                          </div>    
                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                              <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                              <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
     
                          <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                              <button class="btn btn-success">Login</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>                
                    </div>
                    <div class="tab-pane fade" id="create">
                      <form id="tab">
                        <label>Nombre de usuario</label>
                        <input type="text" value="" class="input-xlarge">
                        <label>Nombre</label>
                        <input type="text" value="" class="input-xlarge">
                        <label>Apellidos</label>
                        <input type="text" value="" class="input-xlarge">
                        <label>Email</label>
                        <input type="text" value="" class="input-xlarge">
                        <label>Número de telefono</label>
                        <textarea value="Smith" rows="3" class="input-xlarge">
                        <label>Dirección</label>
                        <textarea value="Smith" rows="3" class="input-xlarge">
                        <label>Ciudad</label>
                        <textarea value="Smith" rows="3" class="input-xlarge">
                        <label>Provincia</label>
                        <textarea value="Smith" rows="3" class="input-xlarge">
                        <label>Código postal</label>
                        <textarea value="Smith" rows="3" class="input-xlarge">
                        </textarea>
     
                        <div>
                          <button class="btn btn-primary">Create Account</button>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>