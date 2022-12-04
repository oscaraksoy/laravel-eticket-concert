<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = now();

        return [
            'company_id' => rand(1,10),
            'name' => fake()->unique()->name(),
            'code' => strtoupper(fake()->lexify()),
            'start_at' => $date,
            'end_at' => $date->addDays(rand(1,3)),
            'price' => rand(100,250) . '000'
        ];
    }
}
