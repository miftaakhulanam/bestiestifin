<?php

namespace Database\Seeders;

use App\Models\Visit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Generate dummy visits for the last 30 days
        for ($i = 30; $i >= 0; $i--) {
            $date = now()->subDays($i);

            // Generate random number of visits per day (5-50 unique visitors)
            $visitorCount = rand(5, 50);

            for ($j = 0; $j < $visitorCount; $j++) {
                Visit::create([
                    'ip_address' => fake()->ipv4(),
                    'user_agent' => fake()->userAgent(),
                    'url' => fake()->randomElement([
                        '/',
                        '/articles',
                        '/galeri',
                        '/konsep',
                        '/kontak',
                    ]),
                    'referer' => fake()->randomElement([
                        null,
                        'https://google.com',
                        'https://facebook.com',
                        'https://twitter.com',
                    ]),
                    'visit_date' => $date->toDateString(),
                ]);
            }
        }
    }
}
