<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = Config::all();
        return view('configs.configForm', compact('configs'));
    }

    public function edit($id)
    {
        $config = Config::find($id);
        return view('configs.config', compact('config'));
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
        $configs = Config::find($id);
        $input['category'] = $request->input('category');
        //no dejamos que se eliminen todos los campos del checkbox
        if ($input['category'] != null) {
            $configs->update($input);
            //mensaje devuelto si se crea correctamente
            return redirect('/configs')->with('success', 'menu web actualizado correctamente.');
        } else {
            //mensaje de error en la página principal indicando que no se pueden dejar campos vacios
            return redirect('/configs')->with('message', 'No puede eliminar todas las categorias');
        }
    }
}
