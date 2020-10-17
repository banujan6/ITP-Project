<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemCodeColumnBottomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bottoms', function (Blueprint $table) {
            $table->string('item_code')->after('id')->unique();
            $table->string('name');
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
            $table->dropColumn('item_code', 'name');
        });
    }
}
