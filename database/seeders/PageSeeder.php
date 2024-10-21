<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// default pages
        $pages = ['pos', 'gps', 'about-us', 'support-us', 'try-free', 'contact-us', 'privacy', 'faq', 'plans'];

        foreach ($pages as $page) {
            $page = Page::query()->create([
                "title" => $page,
                "link" => $page,
                "status" => 1,
                "email" => fake()->safeEmail(),
                "phone" => fake()->phoneNumber(),
                "in_navbar" => 1,
            ]);
            PageLanguage::factory(2)->create()->each(function ($pageLang) use ($page) {
                $page->translations()->create(Arr::except($pageLang->toArray(), 'id'));
            });

//             $page->addMedia(public_path('images/61109.png'))->toMediaCollection('photo');

        }


    }
}
