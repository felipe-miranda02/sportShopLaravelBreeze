<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;


class MarcasTableSeeder extends Seeder
{
    
    public function run()
    {
        $marca1 = new Marca;
        $marca1->id = '1';
        $marca1->name = 'Adidas';
        $marca1->save();

        $marca2 = new Marca;
        $marca2->id = '2';
        $marca2->name = 'Puma';
        $marca2->save();

        $marca3 = new Marca;
        $marca3->id = '3';
        $marca3->name = 'Nike';
        $marca3->save();

        $marca4 = new Marca;
        $marca4->id = '4';
        $marca4->name = 'Umbro';
        $marca4->save();

        $marca5 = new Marca;
        $marca5->id = '5';
        $marca5->name = 'New Balance';
        $marca5->save();


    }
}
