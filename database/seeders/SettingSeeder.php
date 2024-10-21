<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'title' => 'phone',
                'value' => '+966123456789',
            ], [
                'title' => 'email',
                'value' => 'billx@email.com',
            ], [
                'title' => 'team_members',
                'value' => '99',
            ], [
                'title' => 'year_experience',
                'value' => '12',
            ], [
                'title' => 'projects',
                'value' => '150',
            ],
            [
                'title' => 'main_feature',
                'value' => '25',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
