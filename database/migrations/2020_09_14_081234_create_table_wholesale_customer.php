<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWholesaleCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholesale_customer', function (Blueprint $table) {
            $table->id();
            $table->string("phone_number");
            $table->string("description");
            $table->string("name");
            $table->string("address");
            $table->string("credit_limit");
            $table->string("mostly_purchased_product");
            $table->string("bank_name");
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
        Schema::dropIfExists('table_wholesale_customer');
    }
}
