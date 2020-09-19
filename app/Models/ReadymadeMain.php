<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReadymadeSub;

class ReadymadeMain extends Model
{
    //
    protected $table="readymade_main";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
    ];

    public function subs(){
        return $this->hasMany(ReadymadeSub::class);
    }
}
