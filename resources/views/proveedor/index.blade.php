
@extends('layouts.app')

@section('title', 'Listado de proveedores')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de proveedores')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre proveedor</th>            
                <th>Documento</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th class="text-center">
                    <a href="/proveedor/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nueva proveedor">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->id_prove}}</td>
                    <td>{{$proveedor->prove_nom}}</td>
                    <td>{{$proveedor->prove_docu}}</td>
                    <td>{{$proveedor->prove_tele}}</td>
                    <td>{{$proveedor->prove_correo}}</td>
                    <td class="text-center">
                        <form method="POST" action="/proveedor/{{$proveedor->id_prove}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/proveedor/{{$proveedor->id_prove}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>	
    {{$proveedores->links()}} 
@endsection
