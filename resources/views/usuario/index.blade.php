
@extends('layouts.app')

@section('title', 'Listado de usuarios')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Usuarios')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>            
                <th>Apellido</th>
                <th>Documento</th>
                <th>Correo</th>  
                <th>Fecha de nacimiento</th>
                <th>Genero</th>
                <th>Telefono</th> 
                <th>Rol</th>
                <th>Estado</th>                             
                               
                <th class="text-center">
                    <a href="/usuario/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Usuario">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nuevo
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($users as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->usu_ape}}</td>
                    <td>{{$usuario->usu_docu}}</td>
                    <td>{{$usuario->email}}</td>     
                    <td>{{$usuario->fecha_naci}}</td>
                    <td>{{$usuario->usu_gene}}</td>
                    <td>{{$usuario->usu_tele}}</td> 
                    <td>{{$usuario->nom_rol}}</td>
                    <td>{{$usuario->nom_estado}}</td>                                  
                                    
                    <td class="text-center">
                        <form method="POST" action="/usuario/{{$usuario->id}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 6px">	</button>				
                        </form>
                        <a href="/usuario/{{$usuario->id}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links()}}	
@endsection
