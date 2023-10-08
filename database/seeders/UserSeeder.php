<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' => 'ANGEL',
        'email' => 'angel@gmail.com',
        'password' => bcrypt('12345678')
        ]);
        //se indica cuantos registro de prueba se requiere generar
        User::factory(99)->create();              
    }
}
