<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Nota: para generar una nueva carpeta dentro de la carpeta Storage, en Databaseeder
// especificamos que queremos utilizar use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Eliminación de carpeta


        // para generar una nueva carpeta se llama a storage accedemos al metodo makedirectory
        // se especifica que carpeta se requiere generar
        Storage::makeDirectory('/public/storage/cursos');

        $this->call(UserSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(CourseSeeder::class);
    }
}
