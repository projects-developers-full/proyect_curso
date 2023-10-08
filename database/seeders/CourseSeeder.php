<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //se llama al modelo Course pasando e método Factory, para cierta cantidad de registro
        Course::factory(40)->create();
        // lo que se requiee es descargar imagene para nuestro curso se va
        // almacenar la url donde se encuentrra almacenado la imagen
        // en la base de datos, se va almacenar en la tabla images 



    }
}
