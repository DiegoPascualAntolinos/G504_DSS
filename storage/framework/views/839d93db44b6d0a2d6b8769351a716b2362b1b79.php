<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   <?php echo $__env->make('layout.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
 </head>
 
 <body>
 
<?php echo $__env->make('layout.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
       <?php echo $__env->make('layout.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php echo $__env->yieldContent('content'); ?>
 
<?php echo $__env->make('layout.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php echo $__env->make('layout.partials.footer-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
 </body>
 
</html>
