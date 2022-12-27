<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeType1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer', function (Blueprint $table) {
            $table->string('first_name', 100)->change();
            $table->string('last_name', 100)->change();
            $table->string('country', 100)->change();
            $table->string('city', 100)->change();
            $table->string('gender', 1)->change();
            $table->string('email', 150)->change();
            $table->date('date_of_birth')->change();
        });

        
        Schema::table('seller', function (Blueprint $table) {
            $table->string('first_name', 100)->change();
            $table->string('last_name', 100)->change();
            $table->string('country', 100)->change();
            $table->string('city', 100)->change();
            $table->string('gender', 1)->change();
            $table->string('email', 150)->change();
            $table->date('date_of_birth')->change();
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
