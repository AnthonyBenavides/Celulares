<!DOCTYPE html>
<html>
<head>
	<title>Celulares- @yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
	integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</head>
<body>


		<nav class="navbar navbar-dark bg-warning">
				<a class="navbar-brand" href="{{ url('/') }}">Salma Celulares</a>
			
			   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
				@auth
                        <a href="{{ url('/') }}"></a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                                              
                    @endauth
                   
  @auth
			
                    {{auth()->user()->name}}
					
                    <a href="#" onclick="event.preventDefault();
					
					                    document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf                 
                    </form>
                    @endauth
					@auth
					<div class="dropdown">				
					<ul class="nav justify-content-rigth"> 
				<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    		<a class="dropdown-item"  href="{{route('asesor.index')}}">Asesores</a>
			<a class="dropdown-item"  href="{{route('producto.index')}}">Productos</a>
			<a class="dropdown-item"  href="{{route('marca.index')}}">Marcas</a>
			<a class="dropdown-item"  href="{{route('proveedor.index')}}">Proveedores</a>
			<a class="dropdown-item"  href="{{route('rol.index')}}">Roles</a>
			<a class="dropdown-item"  href="{{route('estado.index')}}">Estados</a>
			<a class="dropdown-item"  href="{{route('local.index')}}">Locales</a>
			<a class="dropdown-item"  href="{{route('usuario.index')}}">Usuarios</a>
  </div>
  </div>		
				</ul>
  @endauth
                </div>
            @endif
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