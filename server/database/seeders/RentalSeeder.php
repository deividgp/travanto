<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Rental::factory(10)->create();
        DB::table('rentals')->insert([
            'name' => 'Apartment',
            'location' => 'Barcelona',
            'rooms' => 2,
        ]);
        DB::table('rentals')->insert([
            'name' => 'Room',
            'location' => 'Reus',
            'rooms' => 1,
        ]);
        DB::table('rentals')->insert([
            'name' => 'Apartment',
            'location' => 'Barcelona',
            'rooms' => 3,
        ]);
        DB::table('rentals')->insert([
            'name' => 'House',
            'location' => 'Hamburg',
            'rooms' => 4,
        ]);
    }
}
