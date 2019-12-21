<!DOCTYPE html>
<html>
<head>
	<title>Celulares- @yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
	integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


	
</head>
<body>

		<nav class="navbar navbar-dark bg-warning">
				<a class="navbar-brand" href="#">Salma Celulares</a>
				<ul class="nav justify-content-center">
					<li class="nav-item">	
						<a class="navbar-brand" href="{{route('movimiento.index')}}">Movimientos</a>
						<a class="navbar-brand" href="{{route('producto.index')}}">Productos</a>
						<a class="navbar-brand" href="{{route('usuario.index')}}">Usuarios</a>				
						<a class="navbar-brand" href="{{route('asesor.index')}}">Asesores</a>
						<a class="navbar-brand" href="{{route('local.index')}}">Locales</a>
						<a class="navbar-brand" href="{{route('proveedor.index')}}">Proveedores</a>
						<a class="navbar-brand" href="{{route('marca.index')}}">Marcas</a>
						<a class="navbar-brand" href="{{route('rol.index')}}">Roles</a>
						<a class="navbar-brand" href="{{route('estado.index')}}">Estados</a>
						
						
					</li>
				
			   </ul>
		  </nav>

		  <div class="container">
			<div style="background-color:#ffc107; color:#FFFFFF; margin-top:7px">
			<h1 class="nav navbar-nav">@yield('title2')</h1>
			</div>
		
		@yield('content')

	</div>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
     -->
 
</body>
</html>