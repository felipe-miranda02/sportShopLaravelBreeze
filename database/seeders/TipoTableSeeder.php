<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Migration;
use App\Models\Tipo;

class TipoTableSeeder extends Seeder
{
    
    public function run()
    {
        $tipo1 = new Tipo ;
        $tipo1->id = '1';
        $tipo1->name = 'Zapatilla';
        $tipo1->save();

        $tipo2 = new Tipo ;
        $tipo2->id = '2';
        $tipo2->name = 'Campera';
        $tipo2->save();

        $tipo3 = new Tipo ;
        $tipo3->id = '3';
        $tipo3->name = 'Remerra';
        $tipo3->save();

        $tipo4 = new Tipo ;
        $tipo4->id = '4';
        $tipo4->name = 'Pantalon';
        $tipo4->save();

        $tipo5 = new Tipo ;
        $tipo5->id = '5';
        $tipo5->name = 'Short';
        $tipo5->save();

        $tipo6 = new Tipo ;
        $tipo6->id = '6';
        $tipo6->name = 'Gorra';
        $tipo6->save();

    }
}
