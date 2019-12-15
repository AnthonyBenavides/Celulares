<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rol;

class RolController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = DB::table('tb_roles')
                    ->select('id_rol','nom_rol','desc_rol')
                    ->paginate(10);
        return view('rol.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //OJO CON ESTO ANTHOY 
        $roles = Rol::orderBy('nom_rol')->get();
        return view('rol.create',compact('roles'));
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
                'nom_rol' => 'required|min:5'

        ]);


        $rol = new Rol;
        //$flight->name = $request->name
        $rol->nom_rol = $request->nom_rol;
        $rol->desc_rol = $request->desc_rol;
        $rol->save();
        return redirect()->route('rol.index')->with('status','guardado');
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
        $rol = Rol::findOrFail($id);
        return view('rol.edit', compact('rol'));
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
        $rol = Rol::findOrFail($id);
        $rol->fill($request->all());
        $rol->save();
        return redirect()->route('rol.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return redirect()->route('rol.index')->with('status','eliminado');
    }
}
