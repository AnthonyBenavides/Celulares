@extends('layouts.app')

@section('title', 'Actualización de Locales')
@section('title2', 'Actualización de Locales')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/local/{{$local->id_local}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="nom_local">Nombre Local</label>
							<input type="text" value = '{{$local->nom_local}}' class="form-control" name="nom_local"/>
							{!! $errors->first('nom_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="direc_local">Dirección</label>
							<input type="text" value = '{{$local->direc_local}}' class="form-control" name="direc_local"/>
							{!! $errors->first('direc_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						<div class="form-group">
							<label for="tele_local">Telefono</label>
							<input type="text" value = '{{$local->tele_local}}' class="form-control" name="tele_local"/>
							{!! $errors->first('tele_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
