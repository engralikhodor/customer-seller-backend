<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('city');
            $table->string('currency');
            $table->string('cost_per_hour');
            $table->string('gender');
            $table->string('skills');
            $table->string('email');
            $table->bigInteger('phone');
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
        Schema::dropIfExists('seller');
    }
}
/*
TODO CHECK
$table->json('field_name');
And in your model you add the field to the $casts property to instruct Eloquent to deserialize it from JSON into a PHP array:


class SomeModel extends Model
{
    protected $casts = [
        'field_name' => 'array'
    ];
}
*/