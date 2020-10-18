<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeBasicDetails extends Model
{
    //
    protected $table = 'Employee_basic_details';
    protected $primaryKey = "id";

    protected $fillable = ['name','age','dob','gender','marital_status','blood_group_id',
        'education_qualification_id','address','nic','driving_licence_no','bcard_no','employee_id',
        'doj','employee_type','employee_status','bank_id','account_number','phone_number',
        'email','correspondent_address','emergency_contact_number','emergency_contact_person',
        'emergency_contact_person_relationship','mediclaim'];

    public function bank(){
        return $this->belongsTo(Bank::class, "bank_id", "id");
    }

    public function bloodGroup(){
        return $this->belongsTo(BloodGroup::class, "blood_group_id", "id");
    }

    public function education(){
        return $this->belongsTo(Education::class, "education_qualification_id", "id");
    }


}
