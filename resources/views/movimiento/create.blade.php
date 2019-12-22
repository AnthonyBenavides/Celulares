@extends('layouts.app')

@section('title', 'Creación de Movimientos')

@section('title2', 'Nueva Movimiento')

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
				<form method="POST" action="/movimiento" accept-charset="UTF-8" style="display:inline">
					@csrf			
					
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<select name='id_usu' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($usuarios as $usuario)
								<option value = '{{ $usuario->id_usu }}'
									{{(old('id_usu') == $usuario -> id_usu) ? 'selected':''}}>{{ $usuario->usu_nom }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_usu', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Asesor Ingreso</label>
						<select name='id_ase' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($asesores as $asesor)
								<option value = '{{ $asesor->id_ase }}'
									{{(old('id_ase') == $asesor -> id_ase) ? 'selected':''}}>{{ $asesor->ase_nom }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_ase', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="producto">Producto</label>
						<select name='id_produ' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($productos as $producto)
								<option value = '{{ $producto->id_produ }}'
									{{(old('id_produ') == $producto -> id_produ) ? 'selected':''}}>{{ $producto->produ_nom }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_produ', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Proveedor</label>
						<select name='id_prove' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($proveedores as $proveedor)
								<option value = '{{ $proveedor->id_prove }}'
									{{(old('id_prove') == $proveedor -> id_prove) ? 'selected':''}}>{{ $proveedor->prove_nom }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_prove', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="local">Local</label>
						<select name='id_local' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($locales as $local)
								<option value = '{{ $local->id_local }}'
									{{(old('id_local') == $local -> id_local) ? 'selected':''}}>{{ $local->nom_local }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="movimiento">IMEI</label>
						<input type="text" class="form-control" name="imei" id="imei" aria-describedby="movimientolHelp"
						value={{old('imei')}}>
						{!! $errors->first('imei', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="movimiento">Asesor Salida</label>
						<input type="text" class="form-control" name="id_ase_sali" id="id_ase_sali" aria-describedby="movimientolHelp"
						value={{old('id_ase_sali')}}>
						{!! $errors->first('id_ase_sali', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="movimiento">Local Salida</label>
						<input type="text" class="form-control" name="id_local_sali" id="id_local_sali" aria-describedby="movimientolHelp"
						value={{old('id_local_sali')}}>
						{!! $errors->first('id_local_sali', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="movimiento">Observacion</label>
						<input type="text" class="form-control" name="observacion" id="observacion" aria-describedby="movimientolHelp"
						value={{old('observacion')}}>
						{!! $errors->first('observacion', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


