<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1>Contacta con nosotros</h1>
</div> 
<div class="column size-1of4">

<form name="frmContacto" method="POST">
<?php echo csrf_field(); ?>

<table width="500px">
<tr>
<td>
<label for="first_name">Nombre: *</label>
</td>
<td>
<input type="text" name="first_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td valign="top">
<label for="last_name">Apellidos: *</label>
</td>
<td>
<input type="text" name="last_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td>
<label for="email">Email: *</label>
</td>
<td>
<input type="text" name="email" maxlength="80" size="35">
</td>
</tr>
<tr>
<td>
<label for="telephone">Teléfono contacto:</label>
</td>
<td>
<input type="text" name="telephone" maxlength="25" size="15">
</td>
</tr>
<tr>
<td>
<label for="comments">Comentario: *</label>
</td>
<td>
<textarea name="comments" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:right">
    <div class="col-xs-2">
 <div class="row row-centered">
        <button type="sumbit">Enviar</button>
    </div>
</div>
</td>
</tr>
</table>
</form>
</div>
<div class="column size-1of4">
    <iframe src="https://goo.gl/maps/ThcCBMcVBNL2" width="200" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>