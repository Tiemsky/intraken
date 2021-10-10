<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child_categories')->delete();
        $childCategories = [

[
    'sub_category_id' => 3,
    'child_category_name' => 'Acer',
    'slug'=>Str::slug('Acer')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Apple',
    'slug'=>Str::slug('Apple')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Asus',
    'slug'=>Str::slug('Asus')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Axioo',
    'slug'=>Str::slug('Axioo')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Chine',
    'slug'=>Str::slug('Chine')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Clévo',
    'slug'=>Str::slug('Clévo')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Dell',
    'slug'=>Str::slug('Dell')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'HP',
    'slug'=>Str::slug('HP')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Huawei',
    'slug'=>Str::slug('Huawei')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Lave',
    'slug'=>Str::slug('Lave')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Lemote',
    'slug'=>Str::slug('Lemote')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Lenovo',
    'slug'=>Str::slug('Lenovo')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'LG',
    'slug'=>Str::slug('LG')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'MateBook',
    'slug'=>Str::slug('MateBook')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Mi',
    'slug'=>Str::slug('Mi')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Microsoft Surface',
    'slug'=>Str::slug('Microsoft Surface')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'MSi',
    'slug'=>Str::slug('MSi')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Nokia',
    'slug'=>Str::slug('Nokia')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Notebook',
    'slug'=>Str::slug('Notebook')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Panasonic',
    'slug'=>Str::slug('Panasonic')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Samsung',
    'slug'=>Str::slug('Samsung')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Tongfang',
    'slug'=>Str::slug('Tongfang')
],
[
    'sub_category_id' => 3,
    'child_category_name' => 'Xiaomi',
    'slug'=>Str::slug('Xiaomi')
],
        ];
        DB::table('child_categories')->insert($childCategories);
    }
}


                             







