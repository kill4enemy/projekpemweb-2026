<?php

namespace Database\Seeders;
use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Court::create([
            'name' => 'Lapangan 1',
            'location' => 'Tangerang',
            'price_per_hour' => 150000,
            'is_active' => true,
        ]);

        Court::create([
            'name' => 'Lapangan 2',
            'location' => 'Tangerang',
            'price_per_hour' => 150000,
            'is_active' => true,
        ]);

        Court::create([
            'name' => 'Lapangan VIP',
            'location' => 'Tangerang',
            'price_per_hour' => 450000,
            'is_active' => true,
        ]);
    }
}
