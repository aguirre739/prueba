<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class cadeteAlta extends Controller
{
    public function altaDeCadete(Request $request)
    {
        $request->validate([
            'mail' => 'unique:cadetes,mail',
        ]);

        if($request->contrasenia == $request->repitaContrasenia)
        {
            if ($request->hasFile('foto')) 
            {
                $name = time().$request->file('foto')->getClientOriginalName();
                $request->file('foto')->move(public_path().'/fotoCadetes/', $name);
    
                $cadete = new App\cadete();
                $cadete->nombre = $request->nombre;
                $cadete->apellido = $request->apellido;
                $cadete->cuil = $request->cuil;
                $cadete->telefono = $request->telefono;
                $cadete->foto = $name;
                $cadete->mail = $request->mail;
                $cadete->contrasenia = password_hash($request->contrasenia, PASSWORD_DEFAULT);
    
                $cadete->save();
                return view('cadeteCreado');
            }
            else
            {
                return back()->with('message', 'error al cargar la imagen');
            }
        }
        else
        {
            return back()->with('message', 'Las contraseñas no coinciden');
        }
        
       

    }
}
