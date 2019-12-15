@extends('layouts.app')

@section('title', 'Creación de asesores')

@section('title2', 'Nuevo asesor')

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
				<form method="POST" action="/asesor" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="asesor">Asesor</label>
						<input type="text" class="form-control" name="ase_nom" id="ase_nom" aria-describedby="asesorlHelp"
						value={{old('ase_nom')}}>
						{!! $errors->first('ase_nom', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="apellidos">Apellidos</label>
						<input type="text" class="form-control" name="ase_ape" id="ase_ape" aria-describedby="asesorlHelp"
						value={{old('ase_ape')}}>
						{!! $errors->first('ase_ape', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="fecha_naci">Fecha de nacimiento</label>
						<input type="text" class="form-control" name="fecha_naci" id="fecha_naci" aria-describedby="asesorlHelp"
						value={{old('fecha_naci')}}>
						{!! $errors->first('fecha_naci', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="genero">Genero</label>
						<input type="text" class="form-control" name="ase_gene" id="ase_gene" aria-describedby="asesorlHelp"
						value={{old('ase_gene')}}>
						{!! $errors->first('ase_gene', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="ase_tele" id="ase_tele" aria-describedby="asesorlHelp"
						value={{old('ase_tele')}}>
						{!! $errors->first('ase_tele', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="cedula">Cedula</label>
						<input type="text" class="form-control" name="ase_docu" id="ase_docu" aria-describedby="asesorlHelp"
						value={{old('ase_docu')}}>
						{!! $errors->first('ase_docu', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="estado">Estado</label>
						<select name='id_estado' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($estados as $estado)
								<option value = '{{ $estado->id_estado }}'
									{{(old('id_estado') == $estado -> id_estado) ? 'selected':''}}>{{ $estado->nom_estado }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_estado', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


