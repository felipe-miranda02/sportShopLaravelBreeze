<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $admin1 = new User;
        $admin1->name='admin';
        $admin1->email='admin@iaw.com';
        $admin1->password=Hash::make('admin123');
        $admin1->save();
    }
}
