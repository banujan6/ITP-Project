<?php

use Illuminate\Database\Seeder;
use App\Models\RetailCustomer;

class RetailCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RetailCustomer::create([
            "phone_number"=>"07193932884",
            "description"=> "A grade customer",
            "name"=> "Mahadi",
            "address" => "Somewhere",
            "occupation_id"=> 1
        ]);

        RetailCustomer::create([
            "phone_number"=>"071434343884",
            "description"=> "A grade customer",
            "name"=> "Mahadi",
            "address" => "Somewhere",
            "occupation_id"=> 1
        ]);

        RetailCustomer::create([
            "phone_number"=>"0719324884",
            "description"=> "A grade customer",
            "name"=> "Mahadi",
            "address" => "Somewhere",
            "occupation_id"=> 2
        ]);

        RetailCustomer::create([
            "phone_number"=>"07193932884",
            "description"=> "A grade customer",
            "name"=> "Mahadi",
            "address" => "Somewhere",
            "occupation_id"=> 4
        ]);

        RetailCustomer::create([
            "phone_number"=>"07193932884",
            "description"=> "A grade customer",
            "name"=> "Mahadi",
            "address" => "Somewhere",
            "occupation_id"=> 2
        ]);
    }
}
