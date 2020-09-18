<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model

{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';

    protected $fillable =['make','model','year_of_purchase','registered_number','colour','capacity'];

    public function vehicle()
    {
        return $this->hasOne('App\Models\vehicle');
    }

    public function employee_basic_details(){
        return $this->belongsToMany(employee_basic_details::class, 'app\Models\vehicle_emps');
    }

}


