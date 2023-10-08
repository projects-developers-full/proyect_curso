<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Course;
use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Requeriment;
use App\Models\Section;
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
        $courses = Course::factory(40)->create();
        // lo que se requiee es descargar imagene para nuestro curso se va
        // almacenar la url donde se encuentrra almacenado la imagen
        // en la base de datos, se va almacenar en la tabla images


        // al solicitar que se genere 40 registros de prueba se rescata la coleccion en una variable llamada una vez
        // rescatada dicha coleccion se recorre con un forech
        foreach($courses as $course){
            Image::factory(1)->create([
                'imageable_id'=> $course->id,
                'imageable_type' => 'App\Models\Course'
            ]);

            Requeriment::factory(4)->create([
                'course_id' => 1
            ]);
            Goal::factory(4)->create([
                'course_id' => $course->id
            ]);
            Audience::factory(4)->create([
                'course_id' => $course->id
            ]);

            $sections = Section::factory(4)->create([ 'course_id' => $course->id ]);
            foreach($sections as $section){
                $lessons = Lesson::factory(4)->create([ 'section_id' => $section->id]);

                foreach($lessons as $lesson){
                    Description::factory(1)->create(['lesson_id' => $lesson->id]);
                }
            }
        }
    }
}
