<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(5),
            'konten' => $this->faker->paragraphs(5, true),
            // id_kategori will be set in the seeder
            'gambar' => null,
        ];
    }
}
