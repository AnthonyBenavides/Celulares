@extends('layouts.app')

@section('title', 'Actualización de usuario')
@section('title2', 'Actualización de usuario')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/usuario/{{$usuario->id_usu}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						
						<div class="form-group">
							<label for="usu_nom">usuario</label>
							<input type="text" value = '{{$usuario->usu_nom}}'class="form-control" name="usu_nom"/>
							{!! $errors->first('usu_nom', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="usu_ape">Apellidos</label>
							<input type="text" value = '{{$usuario->usu_ape}}' class="form-control" name="usu_ape"/>
							{!! $errors->first('usu_ape', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="fecha_naci">Fecha de nacimiento</label>
							<input type="date" value = '{{$usuario->fecha_naci}}' class="form-control" name="fecha_naci"/>
							{!! $errors->first('fecha_naci', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="usu_gene">Genero</label>
							<input type="text" value = '{{$usuario->usu_gene}}' class="form-control" name="usu_gene"/>
							{!! $errors->first('usu_gene', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="usu_tele">Telefono</label>
							<input type="text" value = '{{$usuario->usu_tele}}' class="form-control" name="usu_tele"/>
							{!! $errors->first('usu_tele', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="usu_correo">Correo</label>
							<input type="text" value = '{{$usuario->usu_correo}}' class="form-control" name="usu_correo"/>
							{!! $errors->first('usu_correo', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="usu_docu">Cedula</label>
							<input type="text" value = '{{$usuario->usu_docu}}' class="form-control" name="usu_docu"/>
							{!! $errors->first('usu_docu', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="id_rol">Rol</label>
							<select name='id_rol' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($roles as $rol)
									@if($usuario->id_rol == $rol->id_rol)
										<option selected value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol }} </option>
									@else
										<option value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol }} </option>
									@endif
								@endforeach
							</select>
							{!! $errors->first('id_rol', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="id_estado">Estado </label>
							<select name='id_estado' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($estados as $estado)
									@if($usuario->id_estado == $estado->id_estado)
										<option selected value = '{{ $estado->id_estado }}'> {{ $estado->nom_estado }} </option>
									@else
										<option value = '{{ $estado->id_estado }}'> {{ $estado->nom_estado }} </option>
									@endif
								@endforeach
							</select>
							{!! $errors->first('id_estado', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/usuario" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
