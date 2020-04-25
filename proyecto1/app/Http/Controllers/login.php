<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class login extends Controller
{
    public function loginCliente(Request $request)
    {       
        $cliente = App\cliente::where('mail', $request->mail)->get();
        if($cliente->count() > 0)
        {
            if(password_verify($request->contrasenia, $cliente[0]->contrasenia))
            {                
                $request->session()->put('idusuario', $cliente[0]->idclientes);
                $request->session()->put('usuario', $cliente[0]->nombre." ".$cliente[0]->apellido);
                return redirect('menuPrincipal');
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
