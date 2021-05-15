<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ChangeController extends Controller
{
    public function index()
    {
        return redirect('/home');
    }
    public function editUser(User $user)
    {
        return view('userConf.updatePassword', compact('user'));
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
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = User::find($id);
        $users->name = $request->get('name');
        $users->surname = $request->get('surname');
        $users->email = $request->get('email');
        $users->tipo_usuario = $request->get('tipo_usuario');
        $users->password = Hash::make($request->get('password'));

        $users->update();

            return redirect('/home')->with('success', 'Usuario editado correctamente.');
    }
}
