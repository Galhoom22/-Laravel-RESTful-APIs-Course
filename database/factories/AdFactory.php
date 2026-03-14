<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'text' => $this->faker->paragraphs(3, true),
            'phone' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement([0, 1]),
            'user_id' => null,
            'domain_id' => \App\Models\Domain::inRandomOrder()->first()?->id ?? \App\Models\Domain::factory()->create()->id,
        ];
    }
}
