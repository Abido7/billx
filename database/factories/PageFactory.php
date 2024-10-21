<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            "title" => $this->faker->randomElement(["contact-us", "about-us", "support-us"]),
            "link" => $this->faker->randomElement(["contact-us", "about-us", "support-us"]),
            "status" => 1,
            "email" => "e@e.com",
            "phone" => "01012277662",
            "in_navbar" => 1,
        ];
    }
}
