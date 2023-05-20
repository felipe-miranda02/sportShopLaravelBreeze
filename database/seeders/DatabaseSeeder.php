<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();
        $this->call([
            
            UserTableSeeder::class,
            //ClienteTableSeeder::class,
            MarcasTableSeeder::class,
            TipoTableSeeder::class,
            TalleTableSeeder::class,
            //ProductosTableSeeder::class,
            //CompraTableSeeder::class,
            //HistorialCompraTableSeeder::class

        ]);
    }
}
