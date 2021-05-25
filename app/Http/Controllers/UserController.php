<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->simplePaginate(6);

        return view('users.index', compact('users', 'users'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:8',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $user->save();
        return redirect('/users')->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user 
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:8',
        ]);

        $users = User::find($id);
        $users->name = $request->get('name');
        $users->surname = $request->get('surname');
        $users->email = $request->get('email');
        $users->tipo_usuario = $request->get('tipo_usuario');
        $users->password = Hash::make($request->get('password'));

        $admin = User::whereTipoUsuario(1)->count();
        
        //si hay mas de un usuario administrador o el usuario que pasamos por valor es 1
        if ($admin > 1 || $users->tipo_usuario == 1) {
            $users->update();
            return redirect('/users')->with('success', 'Usuario editado correctamente.');
        } else {
            //si queda un solo administrador y pasamos el valor 0
            return redirect('/users')->with('message', 'No puede eliminar todos los administradores.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->tipo_usuario == 0) {
            $user->delete();

            return redirect('/users')->with('success', 'Usuario borrado correctamente.');
        } else {
            return redirect('/users')->with('message', 'El usuario es administrador y no se puede borrar, cambie en la configuración el tipo de usuario.');
        }
    }
}
