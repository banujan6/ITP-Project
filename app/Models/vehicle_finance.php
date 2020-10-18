<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Vehicle_finance extends Model

{
    protected $table = 'vehicle_finances';
    protected $primaryKey = 'id';

    protected $fillable = [
        'vehicle_id',
        'finance_company',
        'account_number','monthly_payment_amount','payment_date'];

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class,"vehicle_id","id");
//        return $this->hasOne('App\Models\Vehicle','vehicle_id',);
    }
}
