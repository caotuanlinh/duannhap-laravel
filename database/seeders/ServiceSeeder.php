<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::factory(5)->create();
    }
}
