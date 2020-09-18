<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\WholesaleCreditReport;

class WholesaleCustomer extends Model
{
    protected  $table = "wholesale_customer";

    public  $primaryKey = "id";

    protected $fillable = [
        "phone_number",
        "description",
        "name",
        "address",
        "credit_limit",
        "mostly_purchased_product",
        "bank_name"

    ];



}
