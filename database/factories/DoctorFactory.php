<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name(),
            'appointments' => $this->faker->randomElement(['saturday','sunday','monday','tuesday','friday']),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('12341234'),
            'email_verified_at' => now(),
            'phone' =>$this->faker->phoneNumber(),
            'price' => $this->faker->randomElement(['100','200','300','400','500']),
            'status' => 1,
            'section_id' => Section::all()->random()->id
        ];
    }
}
