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
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->unsignedBigInteger('blood_group_id');
            $table->unsignedBigInteger('education_qualification_id');
            $table->string('address')->nullable();
            $table->string('nic')->nullable();
            $table->string('driving_licence_no')->nullable();
            $table->string('bcard_no')->nullable();
            $table->string('employee_id')->nullable();
            $table->date('doj')->nullable();
            $table->string('employee_type')->nullable();
            $table->string('employee_status')->nullable();
            $table->unsignedBigInteger('bank_id');
            $table->string('account_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('correspondent_address')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->string('emergency_contact_person_relationship')->nullable();
            $table->string('mediclaim')->nullable();
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
