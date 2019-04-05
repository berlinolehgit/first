<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_object')->nullable();
            $table->integer('price')->nullable();
            $table->string('type_price')->nullable();
            $table->string('type_wall')->nullable();
            $table->string('number_rooms')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('information')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
