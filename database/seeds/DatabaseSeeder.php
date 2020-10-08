<?php

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
        $this->call(OccupationSeeder::class);
        $this->call(RetailCustomerSeeder::class);
        //$this->call(ColourSeeder::class);
        $this->call(ReadymadeMainSeeder::class);
        //$this->call(ReadymadeSubSeeder::class);
        $this->call(SizesSeeder::class);
    }
}
