<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corsi>
 */
class CorsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTime();
        $end = clone $start;
        $end->modify('+1 hour');

        return [
            'titolo' => fake()->word(),
            'descrizione' => fake()->sentence(),
            'giorno' => fake()->dateTime(),
            'inizio' => $start,
            'fine' => $end,
        ];
    }
}
