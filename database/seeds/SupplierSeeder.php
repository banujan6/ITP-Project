<?php

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Supplier::create([

            "name"=> "mahadi hassan",
            "phone_number"=> "077-1234561",
            "address"=>"modara" ,
            "description"=>"A grade",
            "bank_name"=>"BOC"
        ]);

        Supplier::create([

            "name"=> "aflal ahmed",
            "phone_number"=> "077-1252361",
            "address"=>"pettah" ,
            "description"=>"B grade",
            "bank_name"=>"Com bank"
        ]);

        Supplier::create([

            "name"=> "dinuka mayadunna",
            "phone_number"=> "077-2314561",
            "address"=>"gampaha" ,
            "description"=>"C grade",
            "bank_name"=>"BOC"
        ]);

        Supplier::create([

            "name"=> "aqueel haniffa",
            "phone_number"=> "077-1237761",
            "address"=>"ward place" ,
            "description"=>"A grade",
            "bank_name"=>"Sampath bank"
        ]);
    }
}
