<?php

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            "Kids-SM",
            "Kids-MD",
            "Kids-L",
            "Kids-XL",
            "Mens-SM",
            "Mens-MD",
            "Mens-L",
            "Mens-XL",
            "Ladies-SM",
            "Ladies-MD",
            "Ladies-L",
            "Ladies-XL",
        ];


        foreach ($sizes as $size){
            Size::create([
                "size"=> $size
            ]);
        }
    }
}
