<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::latest()->paginate(5);
  
        return view('usuarios.index',compact('usuarios','usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'name' => 'required',
            'surname' => 'required',
            'idPerfil' => 'required',
            'email' => 'required',
            'user' => 'required',
            'password' => 'required',
        ]);
  
        $usuario = new Usuario([
            'name' => $request->get('name'),
            'surname'=> $request->get('surname'),
            'idPerfil'=> $request->get('idPerfil'),
            'email'=> $request->get('email'),
            'user'=> $request->get('user'),
            'password'=> $request->get('password')
        ]);

        $usuario->save();
        return redirect('/usuarios')->with('success','Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario 
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'idPerfil' => 'required',
            'email' => 'required',
            'user' => 'required',
            'password' => 'required',
        ]);
  
        $usuarios = Usuario::find($id);
        $usuarios->name = $request->get('name');
        $usuarios->surname = $request->get('surname');
        $usuarios->idPerfil = $request->get('idPerfil');
        $usuarios->email = $request->get('email');
        $usuarios->user = $request->get('user');
        $usuarios->password = $request->get('password');
 
        $usuarios->update();
 
        return redirect('/usuarios')->with('success','Usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
  
        return redirect('/usuarios')->with('success','Usuario borrado correctamente.');
    }
}
