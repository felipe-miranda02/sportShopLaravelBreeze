<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Talle;

class TalleTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $talleXS = new Talle;
        $talleXS->id ='1';
        $talleXS->name = 'XS';
        $talleXS->save();

        $talleS = new Talle;
        $talleS->id ='2';
        $talleS->name = 'S';
        $talleS->save();

        $talleM = new Talle;
        $talleM->id ='3';
        $talleM->name = 'M';
        $talleM->save();

        $talleL = new Talle;
        $talleL->id ='4';
        $talleL->name = 'L';
        $talleL->save();

        $talleXL = new Talle;
        $talleXL->id ='5';
        $talleXL->name = 'XL';
        $talleXL->save();


    }
}
