<?php

namespace Database\Seeders;
use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'user_id' => 1,
            'court_id' => 1,

            'booking_date' => '2026-05-20',

            'start_time' => '19:00',
            'end_time' => '21:00',

            'total_price' => 300000,

            'status' => 'confirmed',
        ]);
    }
}
