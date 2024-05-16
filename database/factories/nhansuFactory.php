<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nhansu>
 */
class nhansuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'giothieu' => $this->faker->sentence(),
        'bangcap' => $this->faker->sentence(),
        'ttnggith' => $this->faker->sentence(),
        'cakinang' => $this->faker->sentence(),
        'kinhngiem' => $this->faker->sentence(),
        'image' => $this->faker->imageUrl(450, 300),
        'team_id' => random_int(1,5),
        ];
    }
}
