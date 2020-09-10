<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRetailCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_customer', function (Blueprint $table) {
            $table->id();
            $table->string("phone_number");
            $table->string("description");
            $table->string("name");
            $table->string("address");

            $table->unsignedBigInteger('occupation_id');

            $table->foreign('occupation_id')->references('id')->on('occupation');
             
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
        Schema::dropIfExists('table_retail_customer');
    }
}
