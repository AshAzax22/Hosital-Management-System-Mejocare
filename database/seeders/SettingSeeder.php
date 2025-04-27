<?php

namespace Database\Seeders;

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
                'key' => 'title',
                'value' => 'Hospital Management System'
            ],
            [
                'key' => 'business_email',
                'value' => 'testing@gmail.com'
            ],
            [
                'key' => 'address',
                'value' => 'Paharganz, Delhi, 144411, New Delhi'
            ],
            [
                'key' => 'business_phone',
                'value' => '+91 83689 28779'
            ],
            [
                'key' => 'working_horse',
                'value' => '7:00 AM - 8:00 PM'
            ],
            [
                'key' => 'description',
                'value' => 'Mejocare is a leading medial service specialist in the field of health and wellness. We are dedicated to providing high-quality medical care and support to our patients, ensuring their well-being and satisfaction.'
            ],
            [
                'key' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'key' => 'icon',
                'value' => 'icon.png'
            ],
            [
                'key' => 'facebook',
                'value' => '#'
            ],
            [
                'key' => 'twitter',
                'value' => '#'
            ],
            [
                'key' => 'instagram',
                'value' => '#'
            ],
            [
                'key' => 'linkedin',
                'value' => '#'
            ],
            [
                'key' => 'youtube',
                'value' => '#'
            ],
            [
                'key' => 'pinterest',
                'value' => '#'
            ]
        ];

        foreach ($settings as $setting) {
            \App\Models\Settings::firstOrCreate($setting);
        }
    }
}
