<?php

namespace Database\Seeders;
use App\Models\Setting;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::create([
    'slogan' => 'Your trusted brand',
    'email' => 'info@example.com',
    'contact' => '+1234567890',
    'location' => '123 Main St',
]);
    }
}
