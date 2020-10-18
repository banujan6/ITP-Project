<?php
use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $names = ["BOC", "Peoples Bank", "HNB", "Commercial Bank", "DFCC", "Sampath Bank"];

        foreach($names as $name){
            Bank::create([
                "name"=> $name
            ]);

        }
    }
}
