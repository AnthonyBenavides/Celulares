<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Local;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locales = DB::table('tb_locales')
                    ->select('id_local','nom_local','direc_local','tele_local')
                    ->paginate(10);
        return view('local.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locales = Local::orderBy('nom_local')->get();
        return view('local.create',compact('locales'));
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
                'nom_local' => 'required',
                'direc_local' => 'required',
                'tele_local' => 'required'                

        ]);


        $local = new Local;
        //$flight->name = $request->name
        $local->nom_local = $request->nom_local;
        $local->direc_local = $request->direc_local;
        $local->tele_local = $request->tele_local;
        $local->save();
        return redirect()->route('local.index')->with('status','guardado');
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
        $local = Local::findOrFail($id);
        return view('local.edit', compact('local'));
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
                'nom_local' => 'required',
                'direc_local' => 'required',
                'tele_local' => 'required'             
    
        ]);
        $local = Local::findOrFail($id);
        $local->fill($request->all());
        $local->save();
        return redirect()->route('local.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);
        $local->delete();
        return redirect()->route('local.index')->with('status','eliminado');
    }
}
