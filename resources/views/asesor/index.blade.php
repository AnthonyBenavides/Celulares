
@extends('layouts.app')

@section('title', 'Listado de asesores')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Asesores')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>            
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Documento</th>
                <th>Estado</th>
                <th class="text-center">
                    <a href="/asesor/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Asesor">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nuevo
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($asesores as $asesor)
                <tr>
                    <td>{{$asesor->id_ase}}</td>
                    <td>{{$asesor->ase_nom}}</td>
                    <td>{{$asesor->ase_ape}}</td>
                    <td>{{$asesor->fecha_naci}}</td>
                    <td>{{$asesor->ase_gene}}</td>
                    <td>{{$asesor->ase_tele}}</td>
                    <td>{{$asesor->ase_docu}}</td>
                    <td>{{$asesor->nom_estado}}</td>
                    <td class="text-center">
                        <form method="POST" action="/asesor/{{$asesor->id_ase}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/asesor/{{$asesor->id_ase}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $asesores->links()}}	
@endsection
