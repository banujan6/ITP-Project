<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBottomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bottoms', function (Blueprint $table) {
            $table->string('colors')->nullable();
            $table->integer('initial_stocks')->default(0);
            $table->string('suppliers')->nullable();
            $table->string('sizes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bottoms', function (Blueprint $table) {
            $table->dropColumn(['colors','initial_stocks','suppliers','sizes']);
        });
    }
}
