<?php

namespace Database\Factories;

use App\Models\Audience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Audience>
 */
class AudienceFactory extends Factory
{
    protected $model = Audience::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence()
        ];
    }
}
