<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://youtu.be/TrsAaX1u4HU?si=BPkpmcG0a_ajrkb7',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/TrsAaX1u4HU?si=HdPhf1FNvm5H5o97" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
             'platform_id' => 1
        ];
    }
}
