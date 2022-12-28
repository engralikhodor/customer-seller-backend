<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsdeletedField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seller', function ($table) {
            $table->tinyInteger('is_deleted')->default('0');
        });
        Schema::table('customer', function ($table) {
            $table->tinyInteger('is_deleted')->default('0');
        });
        Schema::table('task', function ($table) {
            $table->tinyInteger('is_deleted')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
