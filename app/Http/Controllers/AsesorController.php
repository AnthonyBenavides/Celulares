<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;//Fachada para utilizar Query Builder
use App\Asesor;
use App\Estado;


class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesores = DB::table('tb_asesores as c')
                    ->join('tb_estados','c.id_estado','=','tb_estados.id_estado')
                    ->select('c.id_ase','c.ase_nom','ase_ape','fecha_naci','ase_gene','ase_tele','ase_docu','c.id_estado','tb_estados.nom_estado')
                    ->paginate(5);
        return view('asesor.index', compact('asesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estados = Estado::orderBy('nom_estado')->get();
        return view('asesor.create',compact('estados'));
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
           'ase_nom' => 'required',
            'ase_ape' => 'required',
            'fecha_naci' => 'required',
            'ase_gene' => 'required',
            'ase_tele' => 'required',
            'ase_docu' => 'required',
            'id_estado' => 'required'
        ]);
        $asesor = new Asesor;
        //$flight->name = $request->name
        $asesor->ase_nom = $request->ase_nom;
        $asesor->ase_ape = $request->ase_ape;
        $asesor->fecha_naci = $request->fecha_naci;
        $asesor->ase_gene = $request->ase_gene;
        $asesor->ase_tele = $request->ase_tele;
        $asesor->ase_docu = $request->ase_docu;
        $asesor->id_estado = $request->id_estado;
        $asesor->save();
        return redirect()->route('asesor.index')->with('status','guardado');
        
        
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
        $asesor = Asesor::findOrFail($id);
        $estados = Estado::all();
        return view('asesor.edit', compact('asesor','estados'));
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
        $asesor = Asesor::findOrFail($id);
        $asesor->fill($request->all());
        $asesor->save();
        return redirect()->route('asesor.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesor = Asesor::findOrFail($id);
        $asesor->delete();
        return redirect()->route('asesor.index')->with('status','eliminado');
    }
}
