@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->

@section('content')

<head>
 
</head>

<body>


<div class="alert alert-info">
  <a href="#" class="alert-link">Se ha eliminado correctamente.</a>
</div>
<hr></hr>
<center>
<p><input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás" class="btn btn-primary btn-lg" ></p>
</center>
<hr></hr>
</body>


@endsection