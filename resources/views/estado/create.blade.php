@extends('layouts.app')

@section('title', 'Creación de Estados')

@section('title2', 'Nuevo estado')

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
				<form method="POST" action="/estado" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="estado">Nombre Estado</label>
						<input type="text" class="form-control" name="nom_estado" id="nom_estado" aria-describedby="estadolHelp"
						value={{old('nom_estado')}}>
						{!! $errors->first('nom_estado', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/estado" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


