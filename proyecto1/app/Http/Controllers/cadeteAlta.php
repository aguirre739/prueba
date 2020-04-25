<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class cadeteAlta extends Controller
{
    public function altaDeCadete(Request $request)
    {
        $revisar = getimagesize($_FILES["foto"]["tmp_name"]);
        if($revisar !== false)
        {
            $image = $_FILES['foto']['tmp_name'];
            $imgContenido = file_get_contents($image);

            $cadete = new App\cadete();
            $cadete->nombre = $request->nombre;
            $cadete->apellido = $request->apellido;
            $cadete->cuil = $request->cuil;
            $cadete->telefono = $request->telefono;
            $cadete->foto = $imgContenido;
            $cadete->mail = $request->mail;
            $cadete->contrasenia = $request->contrasenia;
            //$cadete->save();
            var_dump($imgContenido);
            //return back()->with('message', 'Se cargo correctamente');
        }
        else
        {
            return back()->with('message', 'error al cargar la imagen');
        }
       

    }
}
