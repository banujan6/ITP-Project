<?php

use Illuminate\Database\Seeder;
use App\Models\ReadymadeSub;

class ReadymadeSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ReadymadeSub::create([
            "name"=>"Jeans",
            "colour_id"=>"#001d60",
            "image"=>"Jeasn.jpg",
            "material"=>"Cotton",
            "main_id"=>1,
            "whole_sale_price"=>500,
            "retail_price"=>800,
            "initial_stocks"=>100,
            "description"=>"New arrival",
            "available_size"=>"XL"
        ]);

        ReadymadeSub::create([
            "name"=>"Jeans",
            "colour_id"=>"#050505",
            "image"=>"Jeasn.jpg",
            "material"=>"Cotton",
            "main_id"=>1,
            "whole_sale_price"=>500,
            "retail_price"=>800,
            "initial_stocks"=>100,
            "description"=>"New arrival",
            "available_size"=>"XL"
        ]);

        ReadymadeSub::create([
            "name"=>"Shirt",
            "colour_id"=>"#ea0910",
            "image"=>"Jeasn.jpg",
            "material"=>"Cotton",
            "main_id"=>2,
            "whole_sale_price"=>500,
            "retail_price"=>800,
            "initial_stocks"=>100,
            "description"=>"New arrival",
            "available_size"=>"XL"
        ]);


    }
}
