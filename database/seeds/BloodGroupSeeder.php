<?php
use App\Models\BloodGroup;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $names = ["A RhD positive (A+)", "B RhD positive (B+)", "B RhD positive (B+)", "B RhD negative (B-)", "O RhD positive (O+)","O RhD negative (O-)","AB RhD positive (AB+)","AB RhD negative (AB-)" ];

        foreach($names as $name){
            BloodGroup::create([
                "name"=> $name
            ]);

        }
    }
}
