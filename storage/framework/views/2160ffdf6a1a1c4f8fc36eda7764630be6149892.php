<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1> Si no es ahora, ¿cuándo? </h1>
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




     <div class="form-group"> <!-- email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="full_name_id" name="email" placeholder="dsstino@gmail.com">
    </div>   


    <div class="form-group"> <!-- titulo -->
        <label for="titulo" class="control-label">Titulo Viaje</label>
        <input type="string" class="form-control" id="full_name_id" name="titulo" placeholder="Una experiencia inolvidable">
    </div>    

    <div class="form-group"> <!-- fecha inicio -->
        <label for="fechaViaje" class="control-label">Fecha inicio</label>
        <input type="date" class"form-control" id="full_name_inicio" name="fechaViaje"  placeholder="DD/MM/AAAA"  type="text">
    </div>  

    <div class="form-group"> <!-- fecha vuelta -->
        <label for="fechaFinOferta" class="control-label">Fecha vuelta</label>
        <input type = "date" class"form-control" id="full_name_fin" name="fechaFinOferta"  placeholder="DD/MM/AAAA" type="text">
    </div>  
                            
    <div class="form-group"> <!-- origen Button -->
        <label for="origen" class="control-label">¿De dónde sales?</label>
        <select class="form-control" id="origen" name="origen">
        <option value="Tirania">Albania, Tirania</option>
            <option value="Berlín">Alemania, Berlín</option>
            <option value="Andorra La Bella">Andorra, Andorra la bella</option>
            <option value="Viena">Austria, Viena</option>
            <option value="Minsk">Bielorrusia, Minsk</option>
            <option value="Bruselas">Bélgica, Bruselas</option>
            <option value="Sarajevo">Bosnia-Herzegovina, Sarajevo</option>
            <option value="Sofía">Bulgaria, Sofía</option>
            <option value="Zangreb">Croacia, Zangreb</option>
            <option value="Copenhague">Dinamarca, Copenhague</option>
            <option value="Bratislava">Eslovaquia, Bratislava</option>
            <option value="Liubliana">Eslovenia, Liubliana</option>
            <option value="Madrid">España, Madrid</option>
            <option value="Barcelona">España, Barcelona</option>
            <option value="Sevilla">España, Sevilla</option>
            <option value="Granada">España, Granada</option>
            <option value="Alicante">España, Alicante</option>
            <option value="Helsinki">Finlandia, Helsinki</option>
            <option value="París">Francia, París</option>
            <option value="Atenas">Grecia, Atenas</option>
            <option value="Budapest">Hungría, Budapest</option>
            <option value="Dublín">Irlanda, Dublín</option>
            <option value="Reikiavik">Islandia, Reikiavik</option>
            <option value="Roma">Italia, Roma</option>
            <option value="Riga">Letonia, Riga</option>
            <option value="Vilna">Lituania, Vilna</option>
            <option value="Luxemburgo">Luxemburgo, Luxemburgo</option>
            <option value="Skopje">Macedonia, Skopje</option>
            <option value="La Valetta">Malta, La Valetta</option>
            <option value="Chisinau">Moldova, Chisinau</option>
            <option value="Mónaco-Vile">Mónaco, Mónaco-Vile</option>
            <option value="Oslo">Noruega, Oslo</option>
            <option value="Amsterdam">Países Bajos, Amsterdam</option>
            <option value="Varsovia">Polonia, Varsovia</option>
          
        </select>                    
    </div>
    
             
    <div class="form-group"> <!-- destino Button -->
        <label for="destino" class="control-label">¿A dónde vas?</label>
        <select class="form-control" id="destino" name="destino">
            <option value="Tirania">Albania, Tirania</option>
            <option value="Berlín">Alemania, Berlín</option>
            <option value="Andorra La Bella">Andorra, Andorra la bella</option>
            <option value="Viena">Austria, Viena</option>
            <option value="Minsk">Bielorrusia, Minsk</option>
            <option value="Bruselas">Bélgica, Bruselas</option>
            <option value="Sarajevo">Bosnia-Herzegovina, Sarajevo</option>
            <option value="Sofía">Bulgaria, Sofía</option>
            <option value="Zagreb">Croacia, Zangreb</option>
            <option value="Copenhague">Dinamarca, Copenhague</option>
            <option value="Bratislava">Eslovaquia, Bratislava</option>
            <option value="Liubliana">Eslovenia, Liubliana</option>
            <option value="Madrid">España, Madrid</option>
            <option value="Barcelona">España, Barcelona</option>
            <option value="Sevilla">España, Sevilla</option>
            <option value="Granada">España, Granada</option>
            <option value="Alicante">España, Alicante</option>
            <option value="Helsinki">Finlandia, Helsinki</option>
            <option value="París">Francia, París</option>
            <option value="Atenas">Grecia, Atenas</option>
            <option value="Budapest">Hungría, Budapest</option>
            <option value="Dublín">Irlanda, Dublín</option>
            <option value="Reikiavik">Islandia, Reikiavik</option>
            <option value="Roma">Italia, Roma</option>
            <option value="Riga">Letonia, Riga</option>
            <option value="Vilna">Lituania, Vilna</option>
            <option value="Luxemburgo">Luxemburgo, Luxemburgo</option>
            <option value="Skopje">Macedonia, Skopje</option>
            <option value="La Valetta">Malta, La Valeta</option>
            <option value="Chisinau">Moldova, Chisinau</option>
            <option value="Mónaco-Vile">Mónaco, Mónaco-Vile</option>
            <option value="Oslo">Noruega, Oslo</option>
            <option value="Amsterdam">Países Bajos, Amsterdam</option>
            <option value="Varsovia">Polonia, Varsovia</option>
        </select>                    
    </div>

    <div class="form-group"> <!-- precio -->
        <label for="precio" class="control-label">Precio total (todo incluido)</label>
        <input type="double" class="form-control" id="precio" name="precio" placeholder="#####">
    </div>

    <div class="form-group"> <!-- precio -->
        <label for="descripcion" class="control-label">Descripción</label>
        <input type="string" class="form-control" id="descripcion" name="descripcion" style="WIDTH: 632px; HEIGHT: 150px" placeholder="Cuéntanos">
    </div>         
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
    
</form>


<div class = "container">
    <table id = "example" data-toggle="table" class="table table-hover">

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

              <td>

              
              <form action="<?php echo e(url('oferta')); ?>/<?php echo e($oferta->id); ?>"method = "POST">
                <?php echo e(method_field('DELETE')); ?>


              <a href="" class="btn btn-warning">Modificar</a>
              <a href="" class="btn btn-danger">Delete</a
               </td>
               </tr>
              </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($offers->links()); ?>

            </tbody>
            </table>
</div>

<div class="item">
      <img class="img-responsive" src="http://www.cosasdecoches.com/wp-content/uploads/2016/07/Viajar-por-Europa.jpg" alt="New York"
      HSPACE = "61" VSPACE="50">
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>