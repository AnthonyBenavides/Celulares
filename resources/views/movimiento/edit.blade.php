@extends('layouts.app')

@section('title', 'Actualización de movimiento')
@section('title2', 'Actualización de movimiento')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/movimiento/{{$movimiento->id_movi}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						
						<div class="form-group">
							<label for="id_usu">Usuario </label>
							<select name='id_usu' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($movimiento as $movimiento)
									@if($movimiento->id_usu == $movimiento->id_usu)
										<option selected value = '{{ $movimiento->id_usu }}'> {{ $movimiento->usu_nom }} </option>
									@else
										<option value = '{{ $movimiento->id_usu }}'> {{ $movimiento->usu_nom }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_ase">Asesor Ingreso </label>
							<select name='id_ase' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($movimiento as $movimiento)
									@if($movimiento->id_ase == $movimiento->id_ase)
										<option selected value = '{{ $movimiento->id_ase }}'> {{ $movimiento->ase_nom }} </option>
									@else
										<option value = '{{ $movimiento->id_ase }}'> {{ $movimiento->ase_nom }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_produ">Producto </label>
							<select name='id_produ' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($movimiento as $movimiento)
									@if($movimiento->id_produ == $movimiento->id_produ)
										<option selected value = '{{ $movimiento->id_produ }}'> {{ $movimiento->produ_nom }} </option>
									@else
										<option value = '{{ $movimiento->id_produ }}'> {{ $movimiento->produ_nom }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_prove">Proveedor </label>
							<select name='id_prove' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($movimiento as $movimiento)
									@if($movimiento->id_prove == $movimiento->id_prove)
										<option selected value = '{{ $movimiento->id_prove }}'> {{ $movimiento->prove_nom }} </option>
									@else
										<option value = '{{ $movimiento->id_prove }}'> {{ $movimiento->prove_nom }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_local">Local </label>
							<select name='id_local' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($movimiento as $movimiento)
									@if($movimiento->id_local == $movimiento->id_local)
										<option selected value = '{{ $movimiento->id_local }}'> {{ $movimiento->nom_local }} </option>
									@else
										<option value = '{{ $movimiento->id_local }}'> {{ $movimiento->nom_local }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="imei">IMEI</label>
							<input type="text" value = '{{$movimiento->imei}}' class="form-control" name="imei"/>
						</div>

						<div class="form-group">
							<label for="id_ase_sali">Asesor Salida</label>
							<input type="text" value = '{{$movimiento->id_ase_sali}}' class="form-control" name="id_ase_sali"/>
						</div>

						<div class="form-group">
							<label for="id_local_sali">Local Salida</label>
							<input type="text" value = '{{$movimiento->id_local_sali}}' class="form-control" name="id_local_sali"/>
						</div>

						<div class="form-group">
							<label for="observacion">Observacion</label>
							<input type="text" value = '{{$movimiento->observacion}}' class="form-control" name="observacion"/>
						</div>

						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
