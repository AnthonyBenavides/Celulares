<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;//Fachada para utilizar Query Builder

use App\User;
use App\Estado;
use App\Rol;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('tb_usuarios as c')
                    ->join('tb_estados','c.id_estado','=','tb_estados.id_estado')
                    ->join('tb_roles','c.id_rol','=','tb_roles.id_rol')
                    ->select('c.id_usu','c.usu_nom','usu_ape','fecha_naci','usu_gene','usu_tele','usu_correo','usu_docu','password','c.id_rol','tb_roles.nom_rol','c.id_estado','tb_estados.nom_estado')
                    ->paginate(5);
        return view('usuario.index', compact('usuarios'));
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
        $roles = Rol::orderBy('nom_rol')->get();
        return view('usuario.create',compact('estados','roles'));
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
           'usu_nom' => 'required',
            'usu_ape' => 'required',
            'fecha_naci' => 'required',
            'usu_gene' => 'required',
            'usu_tele' => 'required',
            'usu_correo' => 'required',
            'usu_docu' => 'required',
            'password' => 'required',
            'id_rol' => 'required',
            'id_estado' => 'required'
            
        ]);
        $usuario = new Usuario;
        //$flight->name = $request->name
        $usuario->usu_nom = $request->usu_nom;
        $usuario->usu_ape = $request->usu_ape;
        $usuario->fecha_naci = $request->fecha_naci;
        $usuario->usu_gene = $request->usu_gene;
        $usuario->usu_tele = $request->usu_tele;
        $usuario->usu_correo = $request->usu_correo;
        $usuario->usu_docu = $request->usu_docu;
        $usuario->password = Hash::make($request->password);
        $usuario->id_rol = $request->id_rol;
        $usuario->id_estado = $request->id_estado;
        $usuario->save();
        return redirect()->route('usuario.index')->with('status','guardado');
        
        
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
        
        $usuario = Usuario::findOrFail($id);
        $estados = Estado::all();
        $roles = Rol::all();
        return view('usuario.edit', compact('usuario','estados','roles'));
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
            'usu_nom' => 'required',
             'usu_ape' => 'required',
             'fecha_naci' => 'required',
             'usu_gene' => 'required',
             'usu_tele' => 'required',
             'usu_correo' => 'required',
             'usu_docu' => 'required',
             'password'=>'required',
             'id_rol' => 'required',
             'id_estado' => 'required'
         ]);
        $usuario = Usuario::findOrFail($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->route('usuario.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('status','eliminado');
    }
}
