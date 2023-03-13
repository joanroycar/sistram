<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
         $this->middleware('can:usuario.index')->only('index');
         $this->middleware('can:usuario.edit')->only('edit','editrol','update','updaterol');
         $this->middleware('can:usuario.create')->only('create','store');
         $this->middleware('can:usuario.show')->only('show');
         $this->middleware('can:usuario.destroy')->only('destroy');

    }
    public function index()
    {
        $users = User::get();
        return view('usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|max:50|min:6',
            
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = ($request->password);
        $usuario->save();// No es necesario poner Bycrit ya que en el Modelo hay un metodo
        // que encripta todo los datos enviados en un Input con name password.

        return redirect()->route('usuario.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }
    public function editrol(User $usuario){

        $roles = Role::all();

        return view('usuarios.role',compact('usuario','roles'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $usuario)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email'
        ]);
        $usuario->update($request->except(['password']));

        $usuario->update([
            $usuario->name = $request->name,
            $usuario->email = $request->email,
                                                   // que encripta todo los datos enviados en un Input con name password.
        ]);
        if($request->password != ''){
            $usuario->update([
                $usuario->password = $request->password,
            ]);
        }
        return redirect()->route('usuario.index')->with('editar', 'ok');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updaterol(Request $request, User $usuario)
    {
        $request->validate([
            'roles' => 'required'
        ]);

        $usuario->roles()->sync($request->roles);

        return redirect()->route('usuario.index');
    }
    public function destroy(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuario.index')->with('eliminar','El rol se elimino con exito');
    }
}
