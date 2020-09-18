<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeBasicDetails extends Model
{
    //
    protected $table = 'Employee_basic_details';
    protected $primaryKey = "id";

    protected $fillable = ['name','age','dob','gender','marital_status','blood_group','education_qualification','address','nic','driving_licence_no','phone_number'];
}
