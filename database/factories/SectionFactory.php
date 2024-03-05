<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        

        return [
            'name' => $this->faker->unique()->randomElement(['قسم الجراحة','قسم العيون','قسم المخ والأعصاب','قسم الباطنة','قسم النساء والتوليد']),
        ];
            
    
    }
}
