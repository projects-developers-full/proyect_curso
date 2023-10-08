<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Lavel;
use App\Models\Price;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //se genera el campo slug se refiere a la conversion de oracion en minuscula y separada en -
        //por ejemplo "hola-mundo", se utiliza para tener las url amigables.
        // se genera una variable, para generar el campo slug: se importa la clase STR (Illuminate\Support\Str)
        //
        $title = $this->faker->sentence();
        return [
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            //sera llenado con 3 posibles valores que se definieron en el modelo Course, 
            //con el metodo randomElement() 
            'status' => $this->faker->randomElement([Course::BORRADOR,Course::REVISION,Course::PUBLICADO]),
            'slug' => Str::slug($title),
            //para rescatar los id de los usuarios se realiza lo siguiente
            //con random elije un id al azar  
            'user_id' => User::all()->random()->id,
            'level_id' => Lavel::all()->random()->id,
            'categorie_id' => Category::all()->random()->id,
            'price_id' => Price::all()->random()->id,           
        ];
    }
}
