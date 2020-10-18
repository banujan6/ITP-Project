<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChequePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque_payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cheque_number");
            $table->unsignedBigInteger("amount");
            $table->date("cheque_Date");
            $table->date("payment_Date");
            $table->string("bank");
            $table->string("branch");
            $table->unsignedBigInteger("deposited_bank_account")->nullable();
            $table->string("deposited_bank")->nullable();
            $table->date("new_cheque_date")->nullable();

            $table->enum("transaction_status", ["pending", "depositted","returned"]);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cheque_payment');
    }
}
