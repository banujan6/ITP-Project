<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'id';

    protected $fillable = ["name", "phone_number", "address", "description", "bank_name" ];

    public function readymades(){

        return $this->belongsToMany('App\Models\ReadymadeSub','product_suppliers','supplier_id','product_id');


    }

    public function bank(){
        return $this->belongsTo(Bank::class, "bank_name", "id");
    }

    public function transactions(){

        return $this -> hasMany(Transaction::class);

    }
}

