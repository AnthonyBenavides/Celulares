@extends('layouts.app')

@section('title', 'Creación de Roles')

@section('title2', 'Nuevo rol')

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
				<form method="POST" action="/rol" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="rol">Nombre Rol</label>
						<input type="text" class="form-control" name="nom_rol" id="nom_rol" aria-describedby="rollHelp"
						value={{old('nom_rol')}}>
						{!! $errors->first('nom_rol', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="rol">Descripcion</label>
						<input type="text" class="form-control" name="desc_rol" id="desc_rol" aria-describedby="DescripcionlHelp"
						value={{old('desc_rol')}}>
						{!! $errors->first('desc_rol', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/rol" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


