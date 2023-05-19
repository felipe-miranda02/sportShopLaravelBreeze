<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;


class ClienteTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $cliente1 = new cliente;
        $cliente1->id = '1';
        $cliente1->name = 'Pedro';
        $cliente1->email = 'pedro@mail.com';
        $cliente1->password = Hash::make('pedrolaravel');
        $cliente1->save();

        $cliente2 = new cliente;
        $cliente2->id = '2';
        $cliente2->name = 'Maria';
        $cliente2->email = 'maria@mail.com';
        $cliente2->password = Hash::make('marialaravel');
        $cliente2->save();

        $cliente3 = new cliente;
        $cliente3->id = '3';
        $cliente3->name = 'Ignacio';
        $cliente3->email = 'ignnacio@mail.com';
        $cliente3->password = Hash::make('ignaciolaravel');
        $cliente3->save();

        $cliente4 = new cliente;
        $cliente4->id = '4';
        $cliente4->name = 'Julian';
        $cliente4->email = 'julian@mail.com';
        $cliente4->password = Hash::make('julianlaravel');
        $cliente4->save();

        $cliente5 = new cliente;
        $cliente5->id = '5';
        $cliente5->name = 'Kathy';
        $cliente5->email = 'kathy@mail.com';
        $cliente5->password = Hash::make('kathylaravel');
        $cliente5->save();
    }
}
