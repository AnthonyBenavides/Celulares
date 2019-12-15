@extends('layouts.app')

@section('title', 'Creación de proveedores')

@section('title2', 'Nueva proveedor')

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
				<form method="POST" action="/proveedor" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="proveedor">proveedor</label>
						<input type="text" class="form-control" name="prove_nom" id="prove_nom" aria-describedby="proveedorlHelp"
						value={{old('prove_nom')}}>
						{!! $errors->first('prove_nom', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="proveedor">Documento</label>
						<input type="text" class="form-control" name="prove_docu" id="prove_docu" aria-describedby="DocumentolHelp"
						value={{old('prove_docu')}}>
						{!! $errors->first('prove_docu', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="proveedor">Telefono</label>
						<input type="text" class="form-control" name="prove_tele" id="prove_tele" aria-describedby="TelefonolHelp"
						value={{old('prove_tele')}}>
						{!! $errors->first('prove_tele', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="proveedor">Correo</label>
						<input type="text" class="form-control" name="prove_correo" id="prove_correo" aria-describedby="CorreolHelp"
						value={{old('prove_correo')}}>
						{!! $errors->first('prove_correo', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


