<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'David Gutiérrez Pasqual',
            'email' => 'dayd4@outlook.com',
            'password' => 'deividgp95',
        ]);
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
