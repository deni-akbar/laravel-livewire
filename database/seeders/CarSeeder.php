<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create(['merk' => 'Toyota', 'model' => 'Avanza', 'harga' => 250000000]);
        Car::create(['merk' => 'Honda', 'model' => 'Civic', 'harga' => 400000000]);
        Car::create(['merk' => 'Suzuki', 'model' => 'Ertiga', 'harga' => 230000000]);
    }
}
