<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeBasicDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_basic_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->string('phone_number');
            $table->string('marital_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('education_qualification')->nullable();
            $table->string('address')->nullable();
            $table->string('nic');
            $table->string('driving_licence_no')->nullable();
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
        Schema::dropIfExists('employee_basic_details');
    }
}
