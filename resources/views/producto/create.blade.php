@extends('layouts.app')

@section('title', 'Creación de productos')

@section('title2', 'Nueva producto')

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
				<form method="POST" action="/producto" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="producto">producto</label>
						<input type="text" class="form-control" name="produ_nom" id="produ_nom" aria-describedby="productolHelp"
						value={{old('produ_nom')}}>
						{!! $errors->first('produ_nom', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="marca">Marca</label>
						<select name='id_marca' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($marcas as $marca)
								<option value = '{{ $marca->id_marca }}'
									{{(old('id_marca') == $marca -> id_marca) ? 'selected':''}}>{{ $marca->nom_marca }} 
							    </option>
							@endforeach
						</select>
						{!! $errors->first('id_marca', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/producto" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


