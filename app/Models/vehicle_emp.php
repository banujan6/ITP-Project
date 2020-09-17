<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicle_emp extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
       'vehicle_id','emp_id'
    ];

}
