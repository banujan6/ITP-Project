<?php

use Illuminate\Database\Seeder;

use App\Models\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = ["Banker", "Businessman", "Army Soldier", "Accountant", "Manager", "Developers"];
        
        foreach($names as $name){
            Occupation::create([
                "name"=> $name
            ]);

        }

    }
}
