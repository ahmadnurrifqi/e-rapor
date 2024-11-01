<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => fake()->randomElement(User::all()->pluck('id')),
            "nik" => fake()->randomNumber(9),
            "nuptk" => fake()->randomNumber(9),
            "npy" => fake()->randomNumber(9),
            "tempat_lahir" => fake()->city(),
            "tanggal_lahir" => fake()->date(),
            "jenis_kelamin" => fake()->randomElement(['L', 'P', ]),
            "agama" => fake()->randomElement(['Islam', "Katoklik"]),
            "studi_terakhir" => fake()->word(),
            "tahun_gabung" => fake()->year(),
            "alamat" => fake()->address(),
            "no_telp" => fake()->phoneNumber(),
        ];
    }
}
