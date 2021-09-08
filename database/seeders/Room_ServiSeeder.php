<?php

namespace Database\Seeders;

use App\Models\Room_Services;
use Illuminate\Database\Seeder;

class Room_ServiSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Room_Services::factory(7)->create();
        
    }
}
