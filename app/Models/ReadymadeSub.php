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

//    public function colours(){
//        return $this->hasOne(Colour::class, "id", "colour_id");
//    }
}
