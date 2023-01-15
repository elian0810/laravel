<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\appoiment>
 */
class appoimentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->firstName(),
            'lastName'=> fake()->lastName(),
            'mascot'=> fake()->word(),
            'identification'=> fake()->randomElement(['10000019', '10000002', '10006' ]),
            'start'=>date("Y-m-d H:i:s"),
            'end'=>date("Y-m-d H:i:s")

            //
        ];
    }
}
