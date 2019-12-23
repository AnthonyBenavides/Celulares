@extends('layouts.app')

@section('title', 'Actualización de estados')
@section('title2', 'Actualización de estados')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/estado/{{$estado->id_estado}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="nom_estado">Nombre Estado</label>
							<input type="text" value = '{{$estado->nom_estado}}' class="form-control" name="nom_estado"/>
							{!! $errors->first('nom_estado', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/estado" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
