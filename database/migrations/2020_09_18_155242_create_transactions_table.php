<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("invoice_number");
            $table->string("description")->nullable();
            $table->unsignedBigInteger("quantity_or_peices")->nullable();
            $table->unsignedBigInteger("price_per_quantity")->nullable();
            $table->string("item_code");
            $table->enum("payment_type",["cash","cheque_wholesale","cheque_supplier"]);

            $table->unsignedBigInteger("cash")->nullable();

            $table->unsignedBigInteger("cheque_payment_id")->nullable();


            $table->unsignedBigInteger("wholesale_customer_id")->nullable();

            $table->foreign("wholesale_customer_id")->references("id")->on("wholesale_customer");

            $table->unsignedBigInteger("retail_customer_id")->nullable();

            $table->foreign("retail_customer_id")->references("id")->on("retail_customer");

            $table->unsignedBigInteger("supplier_id")->nullable();

            $table->foreign("supplier_id")->references("id")->on("suppliers");


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
        Schema::dropIfExists('transaction');
    }
}
