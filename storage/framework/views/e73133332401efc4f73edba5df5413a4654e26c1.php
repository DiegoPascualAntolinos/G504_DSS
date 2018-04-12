<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


<?php $__env->startSection('content'); ?>

<div class= "container">
    <div class="container container-centered">
<h1>Si no es ahora, ¿cuándo?</h1>
<h1> 
</div> 
<div class="column size-1of4">

<form name="frmContacto" method="POST">
<?php echo csrf_field(); ?>

<table width="500px">
<tr>
<td>
<label for="first_precio">Precio: </label>
</td>
<td>
<input type="text" name="first_precio" maxlength="50" size="50">
</td>
</tr>
<tr>
<td valign="top">
<label for="last_nombre">Titulo: </label>
</td>
<td>
<input type="text" name="last_nombre" maxlength="50" size="50">
</td>
</tr>
<tr>
<td>
<label for="fechaViaje">Inicio: </label>
</td>
<td>
<input id="new_publication_step1_departureDate_date" name="fechaviaje" required="required" placeholder="DD/MM/AAAA" class="date-picker hasDatepicker" type="text">

</td>
</tr>
<tr>
<td>
<label for="origen">¿De dónde sales?:   </label>
</td>
<td>
<input type="text" name="origen" maxlength="50" size="50">
</td>
</tr>
<tr>
<td>
<label for="destino">¿A dónde vas?: </label>
</td>
<td>
<input type="text" name="destino" maxlength="50" size="50">
</td>
</tr>
<tr>
<td>
<label for="FechaFinOferta">Fin: </label>
</td>
<td>
<input id="new_publication_step1_departureDate_date" name="FechaFinOferta" required="required" placeholder="DD/MM/AAAA" class="date-picker hasDatepicker" type="text">

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

    
<article class="HomeBlock u-lighterGray-bg u-darkGray" id="homepage-block-axes">
            <div class="HomeBlock-inner">
                <h2 class="HomeBlock-title">¿Adónde quieres viajar?</h2>
                
    <div class="item active">
      <img class="img-responsive" src="https://www.rentokil.com/blog/wp-content/uploads/2016/03/how-to-prevent-bed-bugs-when-travelling-v2.jpg" alt="Los Angeles">
    </div>
                        

        <div
            id="map1"
            class="geo-map"
            data-latitude="40.396764"
            data-longitude="-3.669434"
            data-avoid-highway="0"
            style="width:342px;height:385px;">
        </div>
    </div>

            <div class="insurance wrapper alert alert-info no-icon clearfix">
    <i class="bbc-icon2-info u-darkBlue size26 pull-left no-margin-left" aria-hidden="true"></i>
    <h2 class="margin-half-bottom u-darkBlue">Suéñalo, vívelo y recuérdalo</h2>
    <ul class="u-gray">
        <li class="line20">Sueña despierto con todas nuestras ofertas</li>
        <li class="line20">Usuarios con perfiles certificados y con opiniones</li>
        <li class="line20">
            <a href="#insuranceModal" data-toggle="modal">Seguro adicional sin coste</a>
            en colaboración con DSS
        </li>
    </ul>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>