<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert 1 record manually
        DB::table('cars')->insert([
            'description' => Str::random(10),
            'model' => Str::random(10),
            'produced_on' => Carbon::parse('2024-01-01')->toDateTimeString(),
            'image' => 'car2.jpg'
        ]);

        // Use factory to create more records
        Car::factory()
            ->count(30)
            ->create();
    }
}