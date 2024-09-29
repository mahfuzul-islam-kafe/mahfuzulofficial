<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'My Awesome Website'],
            ['key' => 'site_url', 'value' => 'https://www.example.com'],
            ['key' => 'contact_email', 'value' => 'contact@example.com'],
            ['key' => 'site_status', 'value' => 'active'],
            ['key' => 'default_language', 'value' => 'en'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}
