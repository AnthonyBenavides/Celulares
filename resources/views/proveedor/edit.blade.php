@extends('layouts.app')

@section('title', 'Actualización de proveedor')
@section('title2', 'Actualización de proveedor')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/proveedor/{{$proveedor->id_prove}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="prove_nom">proveedor</label>
							<input type="text" value = '{{$proveedor->prove_nom}}' class="form-control" name="prove_nom"/>
						</div>
						<div class="form-group">
							<label for="prove_docu">Documento</label>
							<input type="text" value = '{{$proveedor->prove_docu}}' class="form-control" name="prove_docu"/>
						</div>
						<div class="form-group">
							<label for="prove_tele">Telefono</label>
							<input type="text" value = '{{$proveedor->prove_tele}}' class="form-control" name="prove_tele"/>
						</div>
						<div class="form-group">
							<label for="prove_correo">Correo</label>
							<input type="text" value = '{{$proveedor->prove_correo}}' class="form-control" name="prove_correo"/>
						</div>
						
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
