<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = DB::table('tb_marcas')
                    ->select('id_marca','nom_marca')
                    ->paginate(10);
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //OJO CON ESTO ANTHOY 
        $marcas = Marca::orderBy('nom_marca')->get();
        return view('marca.create',compact('marcas'));
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
                'nom_marca' => 'required|min:5'

        ]);


        $marca = new Marca;
        //$flight->name = $request->name
        $marca->nom_marca = $request->nom_marca;
        $marca->save();
        return redirect()->route('marca.index')->with('status','guardado');
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
        $marca = Marca::findOrFail($id);
        return view('marca.edit', compact('marca'));
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
        $marca = Marca::findOrFail($id);
        $marca->fill($request->all());
        $marca->save();
        return redirect()->route('marca.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();
        return redirect()->route('marca.index')->with('status','eliminado');
    }
}
