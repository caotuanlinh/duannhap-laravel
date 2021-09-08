<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Room_Services;
use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class Room_ServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room_Services::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_id' => Room::all()->random()->id,
            'servi_id' => Services::all()->random()->id,
            'additional_price' => rand(1, 3000),          
        ];
    }
}
