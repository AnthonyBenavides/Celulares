@extends('layouts.app')

@section('title', 'Actualización de rol')
@section('title2', 'Actualización de rol')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/rol/{{$rol->id_rol}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="nom_rol">rol</label>
							<input type="text" value = '{{$rol->nom_rol}}' class="form-control" name="nom_rol"/>
						</div>
						<div class="form-group">
							<label for="desc_rol">Descripcion</label>
							<input type="text" value = '{{$rol->desc_rol}}' class="form-control" name="desc_rol"/>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/rol" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
