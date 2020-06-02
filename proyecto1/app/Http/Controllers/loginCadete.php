<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class loginCadete extends Controller
{
    public function loginCadete(Request $request)
    {       
        $cadete = App\cadete::where('mail', $request->mail)->get();
        if($cadete->count() > 0)
        {
            if(password_verify($request->contrasenia, $cadete[0]->contrasenia))
            {                
                $request->session()->put('idCadete', $cadete[0]->idcadetes);
                $request->session()->put('cadete', $cadete[0]->nombre." ".$cadete[0]->apellido);
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
