
@extends('layouts.app')

@section('title', 'Listado de movimientos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de movimientos')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Usuario</th>  
                <th>Asesor Ingreso</th>   
                <th>Producto</th>       
                <th>Proveedor</th>
                <th>Local</th>
                <th>IMEI</th>
                <th>Asesor Salida</th>
                <th>Local</th>
                <th>Observacion</th>
                <th class="text-center">
                    <a href="/movimiento/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nueva movimiento">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($movimientos as $movimiento)
                <tr>
                    <td>{{$movimiento->id_movi}}</td>
                    <td>{{$movimiento->usu_nom}}</td>
                    <td>{{$movimiento->ase_nom}}</td>
                    <td>{{$movimiento->produ_nom}}</td>
                    <td>{{$movimiento->prove_nom}}</td>
                    <td>{{$movimiento->nom_local}}</td>

                    <td>{{$movimiento->imei}}</td>
                    <td>{{$movimiento->id_ase_sali}}</td>
                    <td>{{$movimiento->id_local_sali}}</td>
                    <td>{{$movimiento->observacion}}</td>
                    <td class="text-center">
                        <form method="POST" action="/movimiento/{{$movimiento->id_movi}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 5px">	</button>				
                        </form>
                        <a href="/movimiento/{{$movimiento->id_movi}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>	
    {{$movimientos->links()}} 
@endsection
