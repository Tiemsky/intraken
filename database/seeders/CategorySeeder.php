<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        
        $categories = [
                            [
                                'category_name' => 'Electronics & Appliances',
                                'slug'  =>  Str::slug('Electronics & Appliances'),
                                'class' =>  'fal fa-tv'
                            ],

                            [
                                'category_name' => 'Mobiles & Tablets',
                                'slug'  =>  Str::slug('Mobiles & Tablets'),
                                'class' =>  'fal fa-mobile'
                            ],

                            [
                                'category_name' => 'Furniture',
                                'slug'  =>  Str::slug('Furniture'),
                                'class' =>  'fas fa-couch'
                            ],

                            [
                                'category_name' => 'Cars',
                                'slug'  =>  Str::slug('Cars'),
                                'class' =>  'fas fa-car'
                            ],
                            
                            [
                                'category_name' => 'Motorcycles',
                                'slug'  =>  Str::slug('Motorcycles'),
                                'class' =>  'fas fa-motorcycles'
                            ],

                            [
                                'category_name' => 'Properties',
                                'slug'  =>  Str::slug('Properties'),
                                'class' =>  'fas fa-home'
                            ],


                            [
                                'category_name' => 'Jewelry',
                                'slug'  =>  Str::slug('Jewelry'),
                                'class' =>  'fal fa-ring'
                            ],

                            [
                                'category_name' => 'Fashion & Clothes',
                                'slug'  =>  Str::slug('Fashion & Clothes'),
                                'class' =>  'fas fa-tshirt'
                            ],                           

                            [
                                'category_name' => 'Jobs & Training',
                                'slug'  =>  Str::slug('Jobs & Training'),
                                'class' =>  'fas fa-briefcase'
                            ],

                            [
                                'category_name' => 'Services',
                                'slug'  =>  Str::slug('Services'),
                                'class' =>  'fas fa-user-friends'
                            ],

                            [
                                'category_name' => 'Pets',
                                'slug'  =>  Str::slug('Pets'),
                                'class' =>  'fas fa-paw'
                            ],
                           
                            [
                                'category_name' => 'Sport & Hobbies',
                                'slug'  =>  Str::slug('Sport & Hobbies'),
                                'class' =>  'fas fa-dumbbell'
                            ],

                            [
                                'category_name' => 'Spa & Well-Being',
                                'slug'  =>  Str::slug('Spa & Well-Being'),
                                'class' =>  'fas fa-spa'
                            ],

                            [
                                'category_name' => 'Holidays',
                                'slug'  =>  Str::slug('Holidays'),
                                'class' =>  'fas fa-umbrella-beach'
                            ],

                            [
                                'category_name' => 'Others',
                                'slug'  =>  Str::slug('Others'),
                                'class' =>  'fas fa-question-circle'
                            ],

                ];

                DB::table('categories')->insert($categories);


    }
}
