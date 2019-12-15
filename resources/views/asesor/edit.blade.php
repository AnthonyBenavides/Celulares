@extends('layouts.app')

@section('title', 'Actualización de asesor')
@section('title2', 'Actualización de asesor')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/asesor/{{$asesor->id_ase}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						
						<div class="form-group">
							<label for="ase_nom">asesor</label>
							<input type="text" value = '{{$asesor->ase_nom}}' class="form-control" name="ase_nom"/>
						</div>
						<div class="form-group">
							<label for="ase_ape">Apellidos</label>
							<input type="text" value = '{{$asesor->ase_ape}}' class="form-control" name="ase_ape"/>
						</div>
						<div class="form-group">
							<label for="fecha_naci">Fecha de nacimiento</label>
							<input type="text" value = '{{$asesor->fecha_naci}}' class="form-control" name="fecha_naci"/>
						</div>
						<div class="form-group">
							<label for="ase_gene">Genero</label>
							<input type="text" value = '{{$asesor->ase_gene}}' class="form-control" name="ase_gene"/>
						</div>
						<div class="form-group">
							<label for="ase_tele">Telefono</label>
							<input type="text" value = '{{$asesor->ase_tele}}' class="form-control" name="ase_tele"/>
						</div>
						<div class="form-group">
							<label for="ase_docu">Cedula</label>
							<input type="text" value = '{{$asesor->ase_docu}}' class="form-control" name="ase_docu"/>
						</div>
						
						<div class="form-group">
							<label for="id_estado">Estado </label>
							<select name='id_estado' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($estados as $estado)
									@if($asesor->id_estado == $estado->id_estado)
										<option selected value = '{{ $estado->id_estado }}'> {{ $estado->nom_estado }} </option>
									@else
										<option value = '{{ $estado->id_estado }}'> {{ $estado->nom_estado }} </option>
									@endif
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
