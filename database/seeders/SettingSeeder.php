<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'phone'          => '770-664-2410',
            'phone_e164'     => '+17706642410',
            'email'          => 'offbroadway@msn.com',
            'address_line1'  => '12315 Crabapple Rd Suite 122',
            'address_line2'  => 'Alpharetta, GA 30004',
            'hours_weekday'  => 'Monday - Friday: 9:00 AM - 5:00 PM',
            'hours_weekend'  => 'Saturday: By appointment',
            'maps_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.6494897392854!2d-84.2698!3d34.0521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f574e0c2e6e5b1%3A0x123456789!2s12315%20Crabapple%20Rd%20Suite%20122%2C%20Alpharetta%2C%20GA%2030004!5e0!3m2!1sen!2sus!4v1234567890',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
