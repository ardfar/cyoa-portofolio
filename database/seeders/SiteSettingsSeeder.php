<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'Farras Arrafi Portfolio', 'type' => 'string'],
            ['key' => 'site_tagline', 'value' => 'Crafting Digital Experiences', 'type' => 'string'],
            ['key' => 'contact_email', 'value' => 'contact@example.com', 'type' => 'string'],
        ];

        foreach ($settings as $setting) {
            \Illuminate\Support\Facades\DB::table('site_settings')->updateOrInsert(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
