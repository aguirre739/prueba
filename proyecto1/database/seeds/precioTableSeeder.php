<?php

use Illuminate\Database\Seeder;
use App\precio;

class precioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        precio::truncate();

        $precio = new precio();
        $precio->distancia = 5;
        $precio->costo = 25;
        $precio->save();

        $precio = new precio();
        $precio->distancia = 10;
        $precio->costo = 50;
        $precio->save();

        $precio = new precio();
        $precio->distancia = 15;
        $precio->costo = 100;
        $precio->save();

        $precio = new precio();
        $precio->distancia = 20;
        $precio->costo = 150;
        $precio->save();
    }
}
