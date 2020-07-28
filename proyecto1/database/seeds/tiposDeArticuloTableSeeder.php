<?php

use Illuminate\Database\Seeder;
use App\tiposDeArticulo;

class tiposDeArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tiposDeArticulo::truncate();

        $tipoDeArticulo = new tiposDeArticulo();
        $tipoDeArticulo->nombre = "Llaves";
        $tipoDeArticulo->save();

        $tipoDeArticulo = new tiposDeArticulo();
        $tipoDeArticulo->nombre = "Ropa";
        $tipoDeArticulo->save();

        $tipoDeArticulo = new tiposDeArticulo();
        $tipoDeArticulo->nombre = "Articulos Electronicos";
        $tipoDeArticulo->save();
    }
}
