<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WholesaleCustomer extends Model
{
    protected $table = 'wholesale_customer';
    protected $primaryKey = 'id';

    protected $fillable = ["phone_number", "description", "address", "name", "address", "credit_limit","mostly_purchased_product","bank_name"];
}

