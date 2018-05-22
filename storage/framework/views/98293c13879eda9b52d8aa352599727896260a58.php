<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   <?php echo $__env->make('layout.profilePartials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
 </head>
 
 <body>
 
  <?php echo $__env->make('layout.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="main" id="perfil">

    <div class="sidenav" id="mySidebar">

      <?php echo $__env->make('layout.profilePartials.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>

    <div class="main" id="contenido">

      <?php echo $__env->yieldContent('content'); ?>
      
    </div>

  </div>
 </body>
 
</html>
