<?php

namespace Database\Seeders;

use App\Models\Lavel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lavel::create([
            'name' => 'Nivel básico'
        ]);
        Lavel::create([
            'name' => 'Nivel intermedio'
        ]);
        Lavel::create([
            'name' => 'Nivel avanzado'
        ]);
    }
}
