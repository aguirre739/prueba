<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cockie;
use App;
use Illuminate\Support\Facades\Cookie;

class loginCadete extends Controller
{
    public function loginCadete(Request $request)
    {       
        $cadete = App\cadete::where('mail', $request->mail)->get();

        //var_dump($cliente);
        if($cadete->count() > 0)
        {
            if(password_verify($request->contrasenia, $cadete[0]->contrasenia))
            {    
                Cookie::queue('idCadete', $cadete[0]->idcadetes);     
                Cookie::queue('cadete', $cadete[0]->nombre." ".$cadete[0]->apellido);            
       
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
