<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert(
        [
            'name' => 'tuannnlinhhh',
            'email'=>'tuannnlinhhh@gmail.com',
            'password'=>bcrypt(123456),
            'phone_number' => "531548524"
        ],
    );
    }
}
