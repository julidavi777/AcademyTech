<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->lastName(), 
            'duration' => $this->faker->numberBetween(0,1000),
            'image' => $this->faker->randomElement(['courses/uZVfJT324k3MDRhYzPqhpe58ClPjZPr6d6q5mzVG.jpg', 'courses/tjTmATT29FUfWLqlqTyMjLn1q0B0a3TdXvcmnKYm.png'])
        ];
    }
}
