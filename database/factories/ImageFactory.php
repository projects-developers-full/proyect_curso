<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
            // en el campo url se almacene el url de la imagen se se va descragar
            //para descargar imagen se llama faker luego indicar que se descargue una imagen
            // se (se menciona la direccion donde se va descargar una imagen se especifica la direccion:)
            // tamaño de imagen ('cursos',640,680,null,false)
            'url' => 'cursos/' .$this->faker->image('public/storage/cursos',640,480,null,false),

            // Nota: para generar una nueva carpeta dentro de la carpeta Storage, en Databaseeder
            // especificamos que queremos utilizar use Illuminate\Support\Facades\Storage;
        ];
    }
}
