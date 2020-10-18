<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model

{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';

    protected $fillable =['make','model','year_of_purchase','registered_number','colour','capacity'];

//    public function vehicle()
//    {
//        return $this->hasOne('App\Models\vehicle');
//    }

}


