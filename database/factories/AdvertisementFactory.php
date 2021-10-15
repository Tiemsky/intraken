<?php

namespace Database\Factories;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randCategoryID =Category::all()->random()->id;   
        $randSubCategoryID = SubCategory::where('category_id', $randCategoryID)->get()->random()->id;
        return [
            'user_id' => User::all()->random()->id,
            'category_id' =>$randCategoryID,
            'sub_category_id'=>$randSubCategoryID,
            'country_id' => Country::all()->random()->id,
            'state_id' => State::all()->random()->id,
            'city_id' => City::all()->random()->id,
            'title' => $this->faker->title(),
            'slug' => Str::slug($this->faker->title()),
            'currency' => array_rand(['Dollar', 'Euro', 'FCFA']),
            'price' => rand(50, 900000000), // 109
            'price_status' => array_rand(['fixed', 'negotiable']),
            'isPublished' => rand(0,1),
            'description' => $this->faker->text(),
            
        ];
    }
}
