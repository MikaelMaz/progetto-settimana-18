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
        $start = fake()->dateTimeBetween('now', '+1 month');
        $end = clone $start;
        $end->modify('+1 hour');
        $settimana=['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];

        return [
            'titolo' => fake()->word(),
            'descrizione' => fake()->sentence(),
            'giorno' => fake()->randomElement($settimana),
            'inizio' => $start,
            'fine' => $end,
        ];
    }
}
