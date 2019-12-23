<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = DB::table('tb_Users as c')
                    ->join('tb_estados','c.id_estado','=','tb_estados.id_estado')
                    ->join('tb_roles','c.id_rol','=','tb_roles.id_rol')
                    ->select('c.id','c.name','usu_ape','fecha_naci','usu_gene','usu_tele','email','usu_docu','password','c.id_rol','tb_roles.nom_rol','c.id_estado','tb_estados.nom_estado')
                    ->paginate(5);
        return view('User.index', compact('Users'));
    }


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'usu_ape' => ['required', 'string', 'max:255'],
            'usu_docu' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'fecha_naci' => ['required', 'string', 'max:255'],
            'usu_gene' => ['required', 'string', 'max:255'],
            'usu_tele' => ['required', 'string', 'max:255'],
            'id_rol' => ['required', 'int', 'max:255'],
            'id_estado' => ['required', 'int', 'max:255'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        $estados = Estado::orderBy('nom_estado')->get();
        $roles = Rol::orderBy('nom_rol')->get();
        return view('usuario.create',compact('estados','roles'));
        return User::create([
            'name' => $data['name'],
            'usu_ape' => $data['usu_ape'],
            'usu_docu' => $data['usu_docu'],
            'email' => $data['email'],
            'fecha_naci' => $data['fecha_naci'],
            'usu_gene' => $data['usu_gene'],
            'usu_tele' => $data['usu_tele'],
            'id_rol' => $data['id_rol'],
            'id_estado' => $data['id_estado'],
            'password' => Hash::make($data['password']),
        ]);
      
    }

    public function store(Request $request)
    {
        //

        request()->validate([
           'name' => 'required',
            'usu_ape' => 'required',
            'fecha_naci' => 'required',
            'usu_gene' => 'required',
            'usu_tele' => 'required',
            'email' => 'required',
            'usu_docu' => 'required',
            'password' => 'required',
            'id_rol' => 'required',
            'id_estado' => 'required'
            
        ]);
        $User = new User;
        //$flight->name = $request->name
        $User->name = $request->name;
        $User->usu_ape = $request->usu_ape;
        $User->fecha_naci = $request->fecha_naci;
        $User->usu_gene = $request->usu_gene;
        $User->usu_tele = $request->usu_tele;
        $User->email = $request->email;
        $User->usu_docu = $request->usu_docu;
        $User->password = Hash::make($request->password);
        $User->id_rol = $request->id_rol;
        $User->id_estado = $request->id_estado;
        $User->save();
        return redirect()->route('User.index')->with('status','guardado');
        
        
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
        
        $User = User::findOrFail($id);
        $estados = Estado::all();
        $roles = Rol::all();
        return view('User.edit', compact('User','estados','roles'));
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
            'name' => 'required',
             'usu_ape' => 'required',
             'fecha_naci' => 'required',
             'usu_gene' => 'required',
             'usu_tele' => 'required',
             'email' => 'required',
             'usu_docu' => 'required',
             'password'=>'required',
             'id_rol' => 'required',
             'id_estado' => 'required'
         ]);
        $User = User::findOrFail($id);
        $User->fill($request->all());
        $User->save();
        return redirect()->route('User.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('User.index')->with('status','eliminado');
    }
}

