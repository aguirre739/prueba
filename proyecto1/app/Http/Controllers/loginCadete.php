<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class loginCadete extends Controller
{
    public function loginCadete(Request $request)
    {       
        $cliente = App\cadete::where('mail', $request->mail)->get();
        if($cliente->count() > 0)
        {
            if(password_verify($request->contrasenia, $cliente[0]->contrasenia))
            {                
                $request->session()->put('idCadete', $cliente[0]->idclientes);
                $request->session()->put('cadete', $cliente[0]->nombre." ".$cliente[0]->apellido);
                return redirect('menuCadete');
            }
            else
            {                
                return back()->with('mensaje', 'contraseña incorrecta');
            }
        }
        else
        {
            return back()->with('mensaje', 'Usuario o contraseña incorrectos');
        }       
    }
}
