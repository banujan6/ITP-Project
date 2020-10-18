<?php
use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $names = ["Local G.C.E O/L","Foreign G.C.E O/L","Local G.C.E A/L","Foreign G.C.E A/L","Undergraduate","Graduate"];

        foreach($names as $name){
            Education::create([
                "name"=> $name
            ]);

        }
    }
}
