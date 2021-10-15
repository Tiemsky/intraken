<?php

namespace Database\Factories;

use App\Models\Advertisement;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'post_id'=>Advertisement::all()->random()->id,
            // 'photo0'=>$this->faker->image(public_path('storage/advertisement'), 400, 300, null, false),
            // 'photo1'=>$this->faker->image(public_path('storage/advertisement'), 400, 300, null, false),
        ];
    }
}
