<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_finance extends Model

{
    protected $table = 'vehicle_finances';
    protected $primaryKey = 'id';

    protected $fillable = [
//        'vehicle_id',
        'model','finance_company','account_number','monthly_payment_amount','payment_date'];

//    public function finance()
//    {
//        return $this->belongsTo('App\vehicle_finance', 'vehicle_id');
//    }
}
