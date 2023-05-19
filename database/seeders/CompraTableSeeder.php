<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraTableSeeder extends Seeder
{
        public function run(): void
    {
        $compra1 = new Compra;
        $compra1->id = '1';
        $compra1->cliente_id = '1';
        $compra1->producto_id = '3';
        $compra1->talle_id = '2';
        $compra1->cantidad = '1';
        $compra1->save();

        $compra2 = new Compra;
        $compra2->id = '2';
        $compra2->cliente_id = '1';
        $compra2->producto_id = '17';
        $compra2->talle_id = '5';
        $compra2->cantidad = '2';
        $compra2->save();

        $compra3 = new Compra;
        $compra3->id = '3';
        $compra3->cliente_id = '2';
        $compra3->producto_id = '3';
        $compra3->talle_id = '2';
        $compra3->cantidad = '2';
        $compra3->save();

        $compra4 = new Compra;
        $compra4->id = '4';
        $compra4->cliente_id = '3';
        $compra4->producto_id = '28';
        $compra4->talle_id = '3';
        $compra4->cantidad = '1';
        $compra4->save();

        $compra5 = new Compra;
        $compra5->id = '5';
        $compra5->cliente_id = '4';
        $compra5->producto_id = '39';
        $compra5->talle_id = '2';
        $compra5->cantidad = '3';
        $compra5->save();

        $compra6 = new Compra;
        $compra6->id = '6';
        $compra6->cliente_id = '2';
        $compra6->producto_id = '3';
        $compra6->talle_id = '2';
        $compra6->cantidad = '1';
        $compra6->save();

        $compra7 = new Compra;
        $compra7->id = '7';
        $compra7->cliente_id = '5';
        $compra7->producto_id = '3';
        $compra7->talle_id = '4';
        $compra7->cantidad = '3';
        $compra7->save();

    }
}
