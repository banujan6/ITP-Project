<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicle_finance extends Model

{
    protected $table = 'vehicle_finance';
    protected $primaryKey = 'id';

    protected $fillable = ['vehicle_id','model','finance_company','account_number','monthly_payment_amount','payment_date'];

    public function finance()
    {
        return $this->belongsTo('App\vehicle_finance', 'vehicle_id');
    }
}
