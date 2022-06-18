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
        DB::table('products')->insert([            
            [
                    "name" => "HTC One X9",
                    "price" => "12200",
                    "category" => "Mobile",
                    "description" => "13-megapixel, Optical Image Stabilisation (OIS), dual tone LED flash, Pro mode with manual control and RAW format",
                    "gallery" => "https://m.media-amazon.com/images/I/61C9e5kBD-L._SL1338_.jpg"
            ],
            [
                    "name" => "Apple iPhone 13",
                    "price" => "72990",
                    "category" => "Mobile",
                    "description" => "Cinematic mode adds shallow depth of field and shifts focus automatically in your videos",
                    "gallery" => "https://m.media-amazon.com/images/I/71r69Y7BSeL._SL1500_.jpg"
            ],
            [
                    "name" => "TCL 100 cm (40 inches) ",
                    "price" => "72990",
                    "category" => "tv",
                    "description" => "Cinematic mode adds shallow depth of field and shifts focus automatically in your videos",
                    "gallery" => "https://m.media-amazon.com/images/I/61qTY34RgKL._SL1500_.jpg"
            ]

        ]);
    }
}
