<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = DB::table('tb_estados')
                    ->select('id_estado','nom_estado')
                    ->paginate(10);
        return view('estado.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //OJO CON ESTO ANTHOY 
        $estados = Estado::orderBy('nom_estado')->get();
        return view('estado.create',compact('estados'));
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
                'nom_estado' => 'required|min:5'

        ]);


        $estado = new Estado;
        //$flight->name = $request->name
        $estado->nom_estado = $request->nom_estado;
        $estado->save();
        return redirect()->route('estado.index')->with('status','guardado');
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
        $estado = Estado::findOrFail($id);
        return view('estado.edit', compact('estado'));
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
        
        request() ->validate([
            'nom_estado' => 'required|min:5'

    ]);
        $estado = Estado::findOrFail($id);
        $estado->fill($request->all());
        $estado->save();
        return redirect()->route('estado.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
        $estado->delete();
        return redirect()->route('estado.index')->with('status','eliminado');
    }
}
