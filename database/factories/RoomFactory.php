<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imgName = $this->faker->image(storage_path("app/public/uploads/rooms"), $width = 640, $height = 480, 'cats', false);
        return [
            'room_no' => $this->faker->swiftBicNumber(),
            'servi_id' => Services::all()->random()->id,
            'image' => "uploads/rooms/" . $imgName,
            'price' => rand(1, 3000),
            'floor' => rand(1, 10),
            'detail' => $this->faker->realText($maxNbChars = 200, $indexSize = 2) 
        ];
    }
}
