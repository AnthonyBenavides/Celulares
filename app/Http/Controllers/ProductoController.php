<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Producto;
use App\Marca;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('tb_productos as c')
                    ->join('tb_marcas','c.id_marca','=','tb_marcas.id_marca')
                    ->select('c.id_produ','c.produ_nom','c.id_marca','tb_marcas.nom_marca')
                    ->paginate(10);
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = Marca::orderBy('nom_marca')->get();
        return view('producto.create',compact('marcas'));
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

        request() ->validate([
                'produ_nom' => 'required|min:5',
                'id_marca' => 'required'

        ]);


        $producto = new Producto;
        //$flight->name = $request->name
        $producto->produ_nom = $request->produ_nom;
        $producto->id_marca = $request->id_marca;
        $producto->save();
        return redirect()->route('producto.index')->with('status','guardado');
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
        $producto = Producto::findOrFail($id);
        $marcas = Marca::orderBy('nom_marca')->get();
        return view('producto.edit', compact('producto','marcas'));
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
        $producto = Producto::findOrFail($id);
        $producto->fill($request->all());
        $producto->save();
        return redirect()->route('producto.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('status','eliminado');
    }
}
