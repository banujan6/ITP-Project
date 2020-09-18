<?php

use Illuminate\Database\Seeder;
use App\Models\ReadymadeMain;

class ReadymadeMainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ReadymadeMain::create([
            "name"=>"Jeans",
            "brand"=>"Addidas"
        ]);
        ReadymadeMain::create([
            "name"=>"Shirt",
            "brand"=>"Levis"
        ]);
    }
}
