<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ChequePayment;
use App\Models\WholesaleCustomer;
use App\Models\RetailCustomer;
use App\Models\Supplier;

class Transaction extends Model
{
    protected $table = "transaction";

    protected $primaryKey = "id";

    protected $fillable = [
        "date",
        "invoice_number",
        "description",
        "quantity_or_peices",
        "price_per_quantity",
        "payment_type",
        "cash",
        "cheque_payment_id",
        "wholesale_customer_id",
        "retail_customer_id",
        "item_code",
        "supplier_id"
    ];

    /**
    * Get the Cheque Payments on the related Transaction
    */
    public function cheque_payment(){
        return $this->belongsTo(ChequePayment::class, "cheque_payment_id","id");
    }

    /* Get the Wholesale Customer related Transaction
    */
    public function wholesale_customer(){
        return $this->belongsTo(WholesaleCustomer::class, "wholesale_customer_id","id");
    }

    /**
    * Get the Retail Customer related Transaction
    */
    public function retail_customer(){
        return $this->belongsTo(RetailCustomer::class, "retail_customer_id","id");
    }

    /**
    * Get the Supplier related Transaction
    */
    public function supplier(){
        return $this->belongsTo(Supplier::class, "supplier_id","id");
    }
}
