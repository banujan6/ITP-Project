<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReadymadeMain;

class ReadymadeSub extends Model
{
    //
    protected $table="readymade_sub";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "item_code",
        "colour_id",
        "image",
        "material",
        "main_id",
        "supplier_link",
        "whole_sale_price",
        "retail_price",
        "initial_stocks",
        "description",
        "available_size"
    ];

    public function main(){
        return $this->belongsTo(ReadymadeMain::class, 'id','main_id');
    }

    public function productSupplier(){
        return $this->hasMany(ProductSupplier::class,"product_id","id");
    }

    public function productSizes(){
        return $this->hasMany(ProductSize::class,"product_id","id");
    }

//    public function colours(){
//        return $this->hasOne(Colour::class, "id", "colour_id");
//    }
}
