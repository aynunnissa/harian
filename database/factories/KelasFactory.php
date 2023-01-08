<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => fake()->unique()->name(),
            'tema' => fake()->title(),
            'tipe' => 'required',
            'judul' => fake()->title(),
            'deskripsi_singkat' => 'required',
            'nama_pembicara' => fake()->name(),
            'deskripsi_singkat_pembicara' => fake()->paragraph(),
            'poin_materi' => fake()->paragraph(),
            'rangkaian_materi' => fake()->paragraph(),
        ];
    }
}
