@extends('layout.mainlayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->

<head>
    <style>
       
       body { 
           background: #F8F8FF;
           background-repeat: repeat-x; 
           color: 	#DCDCDC; 
           font-family: arial; 
           font-size: 15px; 
           }

        .centro { 
            border: 0; 
            float: right; 
            background: #fff; 
            color: #f00; 
            width: 50%; 
            line-height: 10px; 
            font-size: 10px; 
            margin: -220% 0 0 0; 
            overflow: hidden; 
            padding: 0 
            }

        #cuerpo { 
            width: 900px; 
            margin: 0px auto; 
            }

        #cabecera { 
            width: 90%; 
            height: 300px; 
            background: url(' https://gozarte.net/wp-content/uploads/2018/01/maleta.jpg ') #000; 
            position: relative; 
            background-position: center center; 
            background-repeat: no-repeat; 
            }


        #opciones { 
            width: 900px; 
            padding: 15px; 
            margin-bottom: 0px; 
            position:relative;
            font-size: 18px; 
            }
    

    </style> 


</head>
@section('content')

	<body>
        <br/><br/><br/><br/>
		<div id="cuerpo">
			<div id="cabecera">
			</div>
            <p></p>
			<div id="opciones">
            <h1><font color="grey">Bienvenido Administrador </font></h1>
            <hr></hr>
                <ul>
                <a class="btn btn-primary btn-lg" href="/ofertaAdmin" role="button">Ofertas</a>
                <a class="btn btn-primary btn-lg" href="/vueloAdmin" role="button">Vuelos</a>
                <a class="btn btn-primary btn-lg" href="/hotelAdmin" role="button">Hoteles</a>
                <a class="btn btn-primary btn-lg" href="/usuarios" role="button">Listado usuarios</a>
                </ul>
                <p></p>
            
			</div>
		
</body>

@endsection