<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee_basic_details extends Model
{
    public function vehicles(){
        return $this->belongsToMany(vehicle::class, 'app\Models\vehicle_emps');
    }
}
