<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadymadeSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readymade_sub', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->mediumText('image')->nullable();
            $table->string('material');
            $table->string('supplier_link')->nullable();
            $table->double('whole_sale_price');
            $table->double('retail_price');
            $table->Integer('initial_stocks');
            $table->string('description')->nullable();
            $table->string('available_size')->nullable();
            $table->string('colour_id');

            $table->unsignedBigInteger('main_id');

            //$table->foreign('colour_id')->references('id')->on('colours');
            $table->foreign('main_id')->references('id')->on('readymade_main');


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
        Schema::dropIfExists('readymade_subs');
    }
}
