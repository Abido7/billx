<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $i = 1;
        return [
            "title" => $this->faker->sentence(1),
            "sub_title" => $this->faker->sentence(2),
            "order" => $i++,
        ];
    }
}
