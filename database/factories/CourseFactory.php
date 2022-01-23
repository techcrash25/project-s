<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->word(10);
        $code = $this->faker->unique()->word(4);
        return [
            'name' => $name,
            'code' => $code,
        ];
    }
}
