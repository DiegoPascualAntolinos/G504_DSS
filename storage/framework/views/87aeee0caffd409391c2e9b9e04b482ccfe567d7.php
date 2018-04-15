<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   <?php echo $__env->make('layout.profilePartials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
 </head>
 
 <body>
 
<?php echo $__env->make('layout.profilePartials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php echo $__env->make('layout.profilePartials.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="main">
<?php echo $__env->yieldContent('content'); ?>
</div>

<?php echo $__env->make('layout.profilePartials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php echo $__env->make('layout.profilePartials.footer-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
 </body>
 
</html>
