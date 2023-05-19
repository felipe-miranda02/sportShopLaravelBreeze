<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HistorialCompra;

class HistorialCompraTableSeeder extends Seeder
{
    public function run(): void
    {
        $historialCompra1 = new HistorialCompra;
        $historialCompra1->id  = '1';
        $historialCompra1->precio = '8499';
        $historialCompra1->fecha = '2023-05-04 09:05:20';
        $historialCompra1->cliente_id = '1';
        $historialCompra1->producto_id = '35';
        $historialCompra1->cantidad = '3';
        $historialCompra1->talle_id = '1';
        $historialCompra1->save();

        $historialCompra2 = new HistorialCompra;
        $historialCompra2->id  = '2';
        $historialCompra2->precio = '26899';
        $historialCompra2->fecha = '2023-05-01 17:05:22';
        $historialCompra2->cliente_id = '2';
        $historialCompra2->producto_id = '5';
        $historialCompra2->cantidad = '3';
        $historialCompra2->talle_id = '2';
        $historialCompra2->save();

        $historialCompra3 = new HistorialCompra;
        $historialCompra3->id  = '3';
        $historialCompra3->precio = '9666';
        $historialCompra3->fecha = '2023-04-27 12:17:20';
        $historialCompra3->cliente_id = '3';
        $historialCompra3->producto_id = '17';
        $historialCompra3->cantidad = '3';
        $historialCompra3->talle_id = '1';
        $historialCompra3->save();

        $historialCompra4 = new HistorialCompra;
        $historialCompra4->id  = '4';
        $historialCompra4->precio = '15290';
        $historialCompra4->fecha = '2023-03-21 00:24:20';
        $historialCompra4->cliente_id = '3';
        $historialCompra4->producto_id = '8';
        $historialCompra4->cantidad = '3';
        $historialCompra4->talle_id = '3';
        $historialCompra4->save();

        $historialCompra5 = new HistorialCompra;
        $historialCompra5->id  = '5';
        $historialCompra5->precio = '23540';
        $historialCompra5->fecha = '2023-05-04 23:05:20';
        $historialCompra5->cliente_id = '3';
        $historialCompra5->producto_id = '14';
        $historialCompra5->cantidad = '3';
        $historialCompra5->talle_id = '2';
        $historialCompra5->save();
    }
}
