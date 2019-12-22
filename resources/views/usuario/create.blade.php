@extends('layouts.app')

@section('title', 'Creación de usuarios')

@section('title2', 'Nuevo usuario')

@section('content')

	<div class="row" >
	<div class="col-sm">
	{{-- 	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/usuario" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="usuario">Nombre </label>
						<input type="text" class="form-control" name="name" id="name" aria-describedby="usuariolHelp"
						value={{old('name')}}>
						{!! $errors->first('name', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="apellidos">Apellidos</label>
						<input type="text" class="form-control" name="usu_ape" id="usu_ape" aria-describedby="usuariolHelp"
						value={{old('usu_ape')}}>
						{!! $errors->first('usu_ape', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="cedula">Cedula</label>
						<input type="text" class="form-control" name="usu_docu" id="usu_docu" aria-describedby="usuariolHelp"
						value={{old('usu_docu')}}>
						{!! $errors->first('usu_docu', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="correo">Correo</label>
						<input type="text" class="form-control" name="email" id="email" aria-describedby="usuariolHelp"
						value={{old('email')}}>
						{!! $errors->first('email', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="fecha_naci">Fecha de nacimiento</label>
						<input type="date" class="form-control" name="fecha_naci" id="fecha_naci" aria-describedby="usuariolHelp"
						value={{old('fecha_naci')}}>
						{!! $errors->first('fecha_naci', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="genero">Genero</label>
						<input type="text" class="form-control" name="usu_gene" id="usu_gene" aria-describedby="usuariolHelp"
						value={{old('usu_gene')}}>
						{!! $errors->first('usu_gene', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="usu_tele" id="usu_tele" aria-describedby="usuariolHelp"
						value={{old('usu_tele')}}>
						{!! $errors->first('usu_tele', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>					
					
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="text" class="form-control" name="password" id="password" aria-describedby="usuariolHelp"
						value={{old('password')}}>
						{!! $errors->first('password', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
				<div class="form-group">
						<label for="rol">Rol</label>
						<select name='id_rol' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($roles as $rol)
								<option value = '{{ $rol->id_rol }}'
									{{(old('id_rol') == $rol -> id_rol) ? 'selected':''}}>{{ $rol->nom_rol }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_rol', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="estado">Estado</label>
						<select name='id_estado' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($estados as $estado)
								<option value = '{{ $estado->id_estado }}'
									{{(old('id_estado') == $estado -> id_estado) ? 'selected':''}}>{{ $estado->nom_estado }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_estado', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/usuario" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


