<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_emps', function (Blueprint $table) {
            $table->integer('vehicle_id')->unsigned();
            $table->integer('emp_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('emp_id')->references('id')->on('employee_basic_details');
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
        Schema::dropIfExists('vehicle_emps');
    }
}
