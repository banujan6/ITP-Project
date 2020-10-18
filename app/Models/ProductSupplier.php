<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSupplier extends Model
{
    //
    protected $table = "product_suppliers";

    protected $primaryKey = "id";

    protected $fillable = ["product_id","supplier_id","product_type"];

    public function supplier(){
        return $this->belongsTo(Supplier::class,"supplier_link","id");
    }
}
