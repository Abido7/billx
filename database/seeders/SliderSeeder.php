<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\SliderLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::factory()->has(SliderLanguage::factory(),'translations')->count(4)->create();
    }
}
