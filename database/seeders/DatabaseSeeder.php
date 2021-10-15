<?php

namespace Database\Seeders;

use Carbon\Factory;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Advertisement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ChildCategorySeeder::class);

        User::factory()->count(20)->create();
        Advertisement::factory()->count(25)->create();
        $faker = \Faker\Factory::create();
        $ads =  Advertisement::all();
        foreach($ads as $ad){
            Image::create(
                [
                    'post_id'=>$ad->id,
                    'photo0'=>$faker->image(public_path('storage/advertisement'), 400, 300, null, false),
                    'photo1'=>$faker->image(public_path('storage/advertisement'), 400, 300, null, false),
                ]
                
            );
        }
       
    }
}
