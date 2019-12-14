@extends('layouts.app')

@section('title', 'Actualización de producto')
@section('title2', 'Actualización de producto')
@section('content')

<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/producto/{{$producto->id_codi}}" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="produ_nomb">producto</label>
						<input type="text" value = '{{$producto->produ_nomb}}' class="form-control" name="produ_nomb"/>
					</div>
					
					<div class="form-group">
						<label for="id_marca">marca </label>
						<select name='id_marca' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($marcas as $marca)
								@if($producto->id_marca == $marca->id_marca)
									<option selected value = '{{ $marca->id_marca }}'> {{ $marca->nom_marca }} </option>
								@else
									<option value = '{{ $marca->id_marca }}'> {{ $marca->nom_marca }} </option>
								@endif
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
				</form>
				<a href="/producto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
	</div>
</div>

@endsection
