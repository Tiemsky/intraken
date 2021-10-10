<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sub_categories')->delete();
        $subCategories = [
                            //Electronics & appliances
                            [
                                'category_id' => 1,
                                'sub_category_name' => 'TVs, Video - Audio',
                                'slug'=>Str::slug('TVs, Video - Audio')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Kitchen & Other Appliances',
                                'slug'=>Str::slug('Kitchen & Other Appliances')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Computers & Laptops',
                                'slug'=>Str::slug('Computers & Laptops')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Cameras & Lenses',
                                'slug'=>Str::slug('Cameras & Lenses')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Games & Entertainment',
                                'slug'=>Str::slug('Games & Entertainment')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Fridges',
                                'slug'=>Str::slug('Fridges')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Computer Accessories',
                                'slug'=>Str::slug('Computer Accessories')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Hard Disks, Printers & Monitors',
                                'slug'=>Str::slug('Hard Disks, Printers & Monitors')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'ACs',
                                'slug'=>Str::slug('ACs')
                            ],

                            [
                                'category_id' => 1,
                                'sub_category_name' => 'Washing Machines',
                                'slug'=>Str::slug('Washing Machines')
                            ],


                            //SmartPhones and Tablets
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Acer',
                                'slug'=>Str::slug('Acer')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Alcatel',
                                'slug'=>Str::slug('Alcatel')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Apple',
                                'slug'=>Str::slug('Apple')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Asus',
                                'slug'=>Str::slug('Asus')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'BlackBerry',
                                'slug'=>Str::slug('BlackBerry')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Caterpillar',
                                'slug'=>Str::slug('Caterpillar')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Celkon',
                                'slug'=>Str::slug('Celkon')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'DataWind',
                                'slug'=>Str::slug('DataWind')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Dell',
                                'slug'=>Str::slug('Dell')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Echo',
                                'slug'=>Str::slug('Echo')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Fujitsu',
                                'slug'=>Str::slug('Fujitsu')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Google',
                                'slug'=>Str::slug('Google')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Hisense',
                                'slug'=>Str::slug('Hisense')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Honor',
                                'slug'=>Str::slug('Honor')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Hp',
                                'slug'=>Str::slug('Hp')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Htc',
                                'slug'=>Str::slug('Htc')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Huawei',
                                'slug'=>Str::slug('Huawei')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Infinix',
                                'slug'=>Str::slug('Infinix')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Lenovo',
                                'slug'=>Str::slug('Lenovo')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'LG',
                                'slug'=>Str::slug('LG')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Microsoft',
                                'slug'=>Str::slug('Microsoft')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Mobile',
                                'slug'=>Str::slug('Mobile')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Motorola',
                                'slug'=>Str::slug('Motorola')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'OnePlus',
                                'slug'=>Str::slug('OnePlus')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Oppo',
                                'slug'=>Str::slug('Oppo')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Philips',
                                'slug'=>Str::slug('Philips')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Pixel',
                                'slug'=>Str::slug('Pixel')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Polytron',
                                'slug'=>Str::slug('Polytron')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'QMobile',
                                'slug'=>Str::slug('QMobile')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Realme',
                                'slug'=>Str::slug('Realme')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Samsung',
                                'slug'=>Str::slug('Samsung')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Sharp',
                                'slug'=>Str::slug('Sharp')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Sony',
                                'slug'=>Str::slug('Sony')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Tecno',
                                'slug'=>Str::slug('Tecno')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Televentures',
                                'slug'=>Str::slug('Televentures')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Televentures',
                                'slug'=>Str::slug('Televentures')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Vivo',
                                'slug'=>Str::slug('Vivo')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Wiko',
                                'slug'=>Str::slug('Wiko')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Xiaomi',
                                'slug'=>Str::slug('Xiaomi')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Xolo',
                                'slug'=>Str::slug('Xolo')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Yu',
                                'slug'=>Str::slug('Yu')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Zopo',
                                'slug'=>Str::slug('Zopo')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'ZTE',
                                'slug'=>Str::slug('ZTE')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'ZUK',
                                'slug'=>Str::slug('ZUK')
                            ],
                            [
                                'category_id' => 2,
                                'sub_category_name' => 'Others',
                                'slug'=>Str::slug('Others')
                            ],


                            //Furniture
                            [
                                'category_id' => 3,
                                'sub_category_name' => 'Sofa & Dining',
                                'slug'=>Str::slug('Sofa & Dining')
                            ],

                            [
                                'category_id' => 3,
                                'sub_category_name' => 'Beds & Wardrobes',
                                'slug'=>Str::slug('Beds & Wardrobes')
                            ],

                            [
                                'category_id' => 3,
                                'sub_category_name' => 'Home Decor & Garden',
                                'slug'=>Str::slug('Home Decor & Garden')
                            ],

                            [
                                'category_id' => 3,
                                'sub_category_name' => 'Kids Furniture',
                                'slug'=>Str::slug('Kids Furniture')
                            ],

                            [
                                'category_id' => 3,
                                'sub_category_name' => 'Other Household Items',
                                'slug'=>Str::slug('Other Household Items')
                            ],


                            //Cars
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Abarth',
                                'slug'=>Str::slug('Abarth')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Abarth',
                                'slug'=>Str::slug('Abarth')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Aiways',
                                'slug'=>Str::slug('Aiways')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Alfa Romeo',
                                'slug'=>Str::slug('Alfa Romeo')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Alpine',
                                'slug'=>Str::slug('Alpine')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Artega',
                                'slug'=>Str::slug('Artega')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Aston Martin',
                                'slug'=>Str::slug('Aston Martin')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Audi',
                                'slug'=>Str::slug('Audi')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Audi',
                                'slug'=>Str::slug('Audi')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Bentley',
                                'slug'=>Str::slug('Bentley')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'BMW',
                                'slug'=>Str::slug('BMW')
                            ],
                            
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Bmw Alpina',
                                'slug'=>Str::slug('Bmw Alpina')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Bmw Alpina',
                                'slug'=>Str::slug('Bmw Alpina')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Cadillac',
                                'slug'=>Str::slug('Cadillac')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Caterham',
                                'slug'=>Str::slug('Caterham')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Chevrolet',
                                'slug'=>Str::slug('Chevrolet')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Chrysler',
                                'slug'=>Str::slug('Chrysler')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Dacia',
                                'slug'=>Str::slug('Dacia')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Daihatsu',
                                'slug'=>Str::slug('Daihatsu')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Dodge',
                                'slug'=>Str::slug('Dodge')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Donkervoort',
                                'slug'=>Str::slug('Donkervoort')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'DS',
                                'slug'=>Str::slug('DS')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Ferrari',
                                'slug'=>Str::slug('Ferrari')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Fiat',
                                'slug'=>Str::slug('Fiat')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Ford',
                                'slug'=>Str::slug('Ford')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Genesis',
                                'slug'=>Str::slug('Genesis')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Honda',
                                'slug'=>Str::slug('Honda')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Hummer',
                                'slug'=>Str::slug('Hummer')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Hyundai',
                                'slug'=>Str::slug('Hyundai')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Infiniti',
                                'slug'=>Str::slug('Infiniti')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Isuzu',
                                'slug'=>Str::slug('Isuzu')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Jaguar',
                                'slug'=>Str::slug('Jaguar')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Jeep',
                                'slug'=>Str::slug('Jeep')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'KIA',
                                'slug'=>Str::slug('KIA')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'KTM',
                                'slug'=>Str::slug('KTM')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Lada',
                                'slug'=>Str::slug('Lada')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Lamborghini',
                                'slug'=>Str::slug('Lamborghini')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Lancia',
                                'slug'=>Str::slug('Lancia')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Land Rover',
                                'slug'=>Str::slug('Land Rover')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Lexus',
                                'slug'=>Str::slug('Lexus')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Lotus',
                                'slug'=>Str::slug('Lotus')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Lynk & Co',
                                'slug'=>Str::slug('Lynk & Co')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Maserati',
                                'slug'=>Str::slug('Maserati')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Mazda',
                                'slug'=>Str::slug('Mazda')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'McLaren',
                                'slug'=>Str::slug('McLaren')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Mercedes-Benz',
                                'slug'=>Str::slug('Mercedes-Benz')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'MG',
                                'slug'=>Str::slug('MG')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Mia Electric',
                                'slug'=>Str::slug('Mia Electric')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'MINI',
                                'slug'=>Str::slug('MINI')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Mitsubishi',
                                'slug'=>Str::slug('Mitsubishi')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Nissan',
                                'slug'=>Str::slug('Nissan')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Opel',
                                'slug'=>Str::slug('Opel')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Peugeot',
                                'slug'=>Str::slug('Peugeot')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Polestar',
                                'slug'=>Str::slug('Polestar')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Porsche',
                                'slug'=>Str::slug('Porsche')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Renault',
                                'slug'=>Str::slug('Renault')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Rolls-Royce',
                                'slug'=>Str::slug('Rolls-Royce')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Saab',
                                'slug'=>Str::slug('Saab')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Seat',
                                'slug'=>Str::slug('Seat')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Seres',
                                'slug'=>Str::slug('Seres')
                            ],
                            
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Skoda',
                                'slug'=>Str::slug('Skoda')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Smart',
                                'slug'=>Str::slug('Smart')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Ssangyong',
                                'slug'=>Str::slug('Ssangyong')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Subaru',
                                'slug'=>Str::slug('Subaru')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Suzuki',
                                'slug'=>Str::slug('Suzuki')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Tesla',
                                'slug'=>Str::slug('Tesla')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Toyota',
                                'slug'=>Str::slug('Toyota')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Volkswagen',
                                'slug'=>Str::slug('Volkswagen')
                            ],
                            [
                                'category_id' => 4,
                                'sub_category_name' => 'Volvo',
                                'slug'=>Str::slug('Volvo')
                            ],
                            


                            //Motorcycles
                            [
                                'category_id' => 5,
                                'sub_category_name' => 'Motorcycle',
                                'slug'=>Str::slug('Motorcycle')
                            ],
                            [
                                'category_id' => 5,
                                'sub_category_name' => 'Scooters',
                                'slug'=>Str::slug('Scooters')
                            ],
                            [
                                'category_id' => 5,
                                'sub_category_name' => 'Bikes',
                                'slug'=>Str::slug('Bikes')
                            ],


                            //Properties
                            [
                                'category_id' => 6,
                                'sub_category_name' => 'For Sale: Houses & Apartments',
                                'slug'=>Str::slug('For Sale: Houses & Apartments')
                            ],
                            [
                                'category_id' => 6,
                                'sub_category_name' => 'For Rent: Houses & Apartments',
                                'slug'=>Str::slug('For Rent: Houses & Apartments')
                            ],
                            [
                                'category_id' => 6,
                                'sub_category_name' => 'Lands & Plots',
                                'slug'=>Str::slug('Lands & Plots')
                            ],
                            [
                                'category_id' => 6,
                                'sub_category_name' => 'For Rent: Shops & Offices',
                                'slug'=>Str::slug('For Rent: Shops & Offices')
                            ],
                            [
                                'category_id' => 6,
                                'sub_category_name' => 'For Sale: Shops & Offices',
                                'slug'=>Str::slug('For Sale: Shops & Offices')
                            ],
                            [
                                'category_id' => 6,
                                'sub_category_name' => 'PG & Guest Houses',
                                'slug'=>Str::slug('PG & Guest Houses')
                            ],

                            //Jewelry
                            [
                                'category_id' => 7,
                                'sub_category_name' => 'Watches',
                                'slug'=>Str::slug('Watches')
                            ],
                            [
                                'category_id' => 7,
                                'sub_category_name' => 'Rings',
                                'slug'=>Str::slug('Rings')
                            ],
                            [
                                'category_id' => 7,
                                'sub_category_name' => 'Necklaces',
                                'slug'=>Str::slug('Necklaces')
                            ],

                            //Fashion
                            [
                                'category_id' => 8,
                                'sub_category_name' => 'Men',
                                'slug'=>Str::slug('Men')
                            ],
                            [
                                'category_id' => 8,
                                'sub_category_name' => 'Women',
                                'slug'=>Str::slug('Women')
                            ],
                            [
                                'category_id' => 8,
                                'sub_category_name' => 'Kids',
                                'slug'=>Str::slug('Kids')
                            ],

                            //Jobs & Training
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Sales & Marketing',
                                'slug'=>Str::slug('Sales & Marketing')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'BPO & Telecaller',
                                'slug'=>Str::slug('BPO & Telecaller')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Driver',
                                'slug'=>Str::slug('Driver')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Office Assistant',
                                'slug'=>Str::slug('Office Assistant')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Delivery & Collection',
                                'slug'=>Str::slug('Delivery & Collection')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Teacher',
                                'slug'=>Str::slug('Teacher')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Cook',
                                'slug'=>Str::slug('Cook')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Receptionist & Front office',
                                'slug'=>Str::slug('Receptionist & Front office')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Operator & Technician',
                                'slug'=>Str::slug('Operator & Technician')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'IT Engineer & Developer',
                                'slug'=>Str::slug('IT Engineer & Developer')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Hotel & Travel Executive',
                                'slug'=>Str::slug('Hotel & Travel Executive')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Accountant',
                                'slug'=>Str::slug('Accountant')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Designer',
                                'slug'=>Str::slug('Designer')
                            ],
                            [
                                'category_id' => 9,
                                'sub_category_name' => 'Other Jobs',
                                'slug'=>Str::slug('Other Jobs')
                            ],

                            //services
                            [
                                'category_id' => 10,
                                'sub_category_name' => 'Electronics & Computer',
                                'slug'=>Str::slug('Electronics & Computer')
                            ],
                            [
                                'category_id' => 10,
                                'sub_category_name' => 'Education & Classes',
                                'slug'=>Str::slug('Education & Classes')
                            ],
                            [
                                'category_id' => 10,
                                'sub_category_name' => 'Drivers & Taxi',
                                'slug'=>Str::slug('Drivers & Taxi')
                            ],
                            [
                                'category_id' => 10,
                                'sub_category_name' => 'Other Services',
                                'slug'=>Str::slug('Other Services')
                            ],

                            //pets
                            [
                                'category_id' => 11,
                                'sub_category_name' => 'Fishes & Aquarium',
                                'slug'=>Str::slug('Fishes & Aquarium')
                            ],
                            [
                                'category_id' => 11,
                                'sub_category_name' => 'Pet Food & Accessories',
                                'slug'=>Str::slug('Pet Food & Accessories')
                            ],
                            [
                                'category_id' => 11,
                                'sub_category_name' => 'Dogs',
                                'slug'=>Str::slug('Dogs')
                            ],
                            [
                                'category_id' => 11,
                                'sub_category_name' => 'Cats',
                                'slug'=>Str::slug('Cats')
                            ],
                            [
                                'category_id' => 11,
                                'sub_category_name' => 'Other Pets',
                                'slug'=>Str::slug('Other Pets')
                            ],

                            //sports & hobbies
                            [
                                'category_id' => 12,
                                'sub_category_name' => 'Books',
                                'slug'=>Str::slug('Books')
                            ],
                            [
                                'category_id' => 12,
                                'sub_category_name' => 'Gym & Fitness',
                                'slug'=>Str::slug('Gym & Fitness')
                            ],
                            [
                                'category_id' => 12,
                                'sub_category_name' => 'Musical Instruments',
                                'slug'=>Str::slug('Musical Instruments')
                            ],
                            [
                                'category_id' => 12,
                                'sub_category_name' => 'Sports Equipment',
                                'slug'=>Str::slug('Sports Equipment')
                            ],
                            [
                                'category_id' => 12,
                                'sub_category_name' => 'Other Hobbies',
                                'slug'=>Str::slug('Other Hobbies')
                            ],


                            //Spa & Well-Being
                            [
                                'category_id' => 13,
                                'sub_category_name' => 'Massage Pro',
                                'slug'=>Str::slug('Massage Pro')
                            ],
                            [
                                'category_id' => 13,
                                'sub_category_name' => 'Massage Erotic',
                                'slug'=>Str::slug('Massage Erotic')
                            ],
                            [
                                'category_id' => 13,
                                'sub_category_name' => 'Saloon',
                                'slug'=>Str::slug('Saloon')
                            ],
                            [
                                'category_id' => 13,
                                'sub_category_name' => 'Perfumes',
                                'slug'=>Str::slug('Perfumes')
                            ],
                            [
                                'category_id' => 13,
                                'sub_category_name' => 'Health & Medicines',
                                'slug'=>Str::slug('Health & Medicines')
                            ],
                            [
                                'category_id' => 13,
                                'sub_category_name' => 'Beauty & Accessories',
                                'slug'=>Str::slug('Beauty & Accessories')
                            ],


                            //Holidays
                            [
                                'category_id' => 14,
                                'sub_category_name' => 'Private Residence',
                                'slug'=>Str::slug('Private Residence')
                            ],
                            [
                                'category_id' => 14,
                                'sub_category_name' => 'Hotels',
                                'slug'=>Str::slug('Hotels')
                            ],

                            //Others
                            [
                                'category_id' => 15,
                                'sub_category_name' => 'others',
                                'slug'=>Str::slug('others')
                            ],


        ];
        DB::table('sub_categories')->insert($subCategories);
    }
}




























