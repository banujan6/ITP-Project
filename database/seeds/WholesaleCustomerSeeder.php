<?php

use \Illuminate\Database\Seeder;
use App\Models\WholesaleCustomer;

class WholesaleCustomerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        WholesaleCustomer::create([

            "phone_number"=> "0718696101",
            "description"=>"Premium customer",
            "name"=>"Jacob Aaron",
            "address"=>"Wellawaththe",
            "credit_limit"=>"Rs2,000,000",
            "mostly_purchased_product"=>"Blue Adidaas bottoms",
            "bank_name"=>"Commercial Bank"
        ]);

        WholesaleCustomer::create([

            "phone_number"=> "0766696101",
            "description"=>"Casual customer",
            "name"=>"Mahadi Hassan",
            "address"=>"Colombo 11",
            "credit_limit"=>"Rs1,000,000",
            "mostly_purchased_product"=>"Blue Adidaas jackets",
            "bank_name"=>"Sampath Bank"
        ]);

        WholesaleCustomer::create([

            "phone_number"=> "0710196101",
            "description"=>"Golden customer",
            "name"=>"Dinuka Mayadunne",
            "address"=>"Pannipitiya",
            "credit_limit"=>"Rs2,500,000",
            "mostly_purchased_product"=>"Polyester",
            "bank_name"=>"Standard chartered Bank"
        ]);

        WholesaleCustomer::create([

            "phone_number"=> "0712226101",
            "description"=>"Casual customer",
            "name"=>"Benyamin Hebron",
            "address"=>"Colombo 10",
            "credit_limit"=>"Rs3,000,000",
            "mostly_purchased_product"=>"Plastic rain courtes",
            "bank_name"=>"Commercial Bank"
        ]);

        WholesaleCustomer::create([

            "phone_number"=> "0711116101",
            "description"=>"Gold customer",
            "name"=>"Ramesh Kithsiri",
            "address"=>"Colombo 5",
            "credit_limit"=>"Rs2,450,000",
            "mostly_purchased_product"=>"Blue Nike bottoms",
            "bank_name"=>"Standard chartered Bank"
        ]);
        // $this->call(UserSeeder::class);
    }
}
