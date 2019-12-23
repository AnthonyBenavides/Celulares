@extends('layouts.app')

@section('title', 'Creación de Locales')

@section('title2', 'Nuevo local')

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
				<form method="POST" action="/local" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="local">Nombre</label>
						<input type="text" class="form-control" name="nom_local" id="nom_local" aria-describedby="locallHelp"
						value={{old('nom_local')}}>
						{!! $errors->first('nom_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="direccion">Dirección</label>
						<input type="text" class="form-control" name="direc_local" id="direc_local" aria-describedby="locallHelp"
						value={{old('direc_local')}}>
						{!! $errors->first('direc_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="tele_local" id="tele_local" aria-describedby="locallHelp"
						value={{old('tele_local')}}>
						{!! $errors->first('tele_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


