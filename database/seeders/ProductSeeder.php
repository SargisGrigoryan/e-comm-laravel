<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '300',
                'descr' => 'New product in the market.',
                'category' => 'mobile',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71wPwmxo2NL._SL1500_.jpg'
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'descr' => 'Smart TV.',
                'category' => 'tv',
                'gallery' => 'https://www.panasonic.com/content/dam/pim/cb/en/TC/TC-32F/TC-32FS500L/TC-32FS500L-Variation_Image_for_See_All_1Global-1_cb_en.png'
            ],
            [
                'name' => 'LG mobile',
                'price' => '500',
                'descr' => 'Smart TV and etc.',
                'category' => 'tv',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/91v4nFq0LuL._SL1500_.jpg'
            ],
            [
                'name' => 'LG fridge',
                'price' => '400',
                'descr' => 'Fridge and etc.',
                'category' => 'fridge',
                'gallery' => 'https://www.sbitanyhome.com/content/images/thumbs/0023271_lg-refrigerator-gr-x710ins_550.jpeg'
            ]
        ]);
    }
}
