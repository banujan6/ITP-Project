<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Occupation;

class RetailCustomer extends Model
{
    protected $table="retail_customer";

    protected $primaryKey = "id";

    protected $fillable = [
        "phone_number",
        "description",
        "name",
        "address",
        "occupation_id"
    ];

    public function occupation(){
        return $this->belongsTo(Occupation::class, "occupation_id", "id");
    }

}

