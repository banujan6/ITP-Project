<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ChequeTransactionType;
use App\Models\ChequeTransactionStatus;

class ChequePayment extends Model
{
    protected $table = "cheque_payment";

    protected $primaryKey = "id";

    protected $fillable =[
        "cheque_number",
        "amount",
        "cheque_Date",
        "payment_Date",
        "bank",
        "branch",
        "deposited_bank_account",
        "deposited_bank",
        "deposited_branch",
        "deposited date",
        "new_cheque_date",
        "transaction_status"
    ];

}
