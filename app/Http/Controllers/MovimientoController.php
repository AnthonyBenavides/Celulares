<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;//Fachada para utilizar Query Builder
use App\Movimiento;
use App\Usuario;
use App\Asesor;
use App\Producto;
use App\Proveedor;
use App\Local;

class MovimientoController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = DB::table('tb_movimientos as c')
                    ->join('tb_usuarios','c.id_usu','=','tb_usuarios.id_usu')
                    ->join('tb_asesores','c.id_ase','=','tb_asesores.id_ase')
                    ->join('tb_productos','c.id_produ','=','tb_productos.id_produ')
                    ->join('tb_proveedores','c.id_prove','=','tb_proveedores.id_prove')
                    ->join('tb_locales','c.id_local','=','tb_locales.id_local')
                    ->select('c.id_movi','c.imei','c.id_ase_sali','c.id_local_sali','observacion',
                             'c.id_usu','tb_usuarios.usu_nom',
                             'c.id_ase','tb_asesores.ase_nom',
                             'c.id_produ','tb_productos.produ_nom',
                             'c.id_prove','tb_proveedores.prove_nom', 
                             'c.id_local','tb_locales.nom_local')
                    ->paginate(5);
        return view('movimiento.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarios = Usuario::orderBy('usu_nom')->get();
        $asesores = Asesor::orderBy('ase_nom')->get();
        $productos = Producto::orderBy('produ_nom')->get();
        $proveedores = Proveedor::orderBy('prove_nom')->get();
        $locales = Local::orderBy('nom_local')->get();
        return view('movimiento.create',compact('usuarios','asesores' , 'productos','proveedores','locales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        request()->validate([

        ]);
        $movimiento = new Movimiento;
        //$flight->name = $request->name
        $movimiento->id_usu = $request->id_usu;
        $movimiento->id_ase = $request->id_ase;
        $movimiento->id_produ = $request->id_produ;
        $movimiento->id_prove = $request->id_prove;
        $movimiento->id_local = $request->id_local;
        $movimiento->imei = $request->imei;
        $movimiento->id_ase_sali = $request->id_ase_sali;
        $movimiento->id_local_sali = $request->id_ase_sali;
        $movimiento->observacion = $request->observacion;
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status','guardado');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $movimiento = Movimiento::findOrFail($id);
        $usuarios = Usuario::all();
        $asesores = Asesor::all();
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        $locales = Local::all();
        return view('movimiento.edit', compact('movimiento','usuarios','asesores','productos','proveedores','locales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([

         ]);
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->fill($request->all());
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->delete();
        return redirect()->route('movimiento.index')->with('status','eliminado');
    }
}
