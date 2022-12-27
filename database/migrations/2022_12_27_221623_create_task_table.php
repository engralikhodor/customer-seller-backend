<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->dateTime("date_time_from");
            $table->dateTime("date_time_to");
            $table->string("city", 100)->nullable();
            $table->double("location_lat", 10, 8)->nullable(); //latitude
            $table->double("location_lng", 11, 8)->nullable(); //longitude
            $table->integer("total_cost")->length(11)->nullable();
            $table->string("task_type", 100)->nullable();
            $table->bigInteger("created_by_id");
            $table->bigInteger("assigned_to_id")->nullable();
            $table->string("status", 50);//NEW, IN_PROGRESS, DONE, CANCELLED
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
        Schema::dropIfExists('task');
    }
}
