<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_details', function (Blueprint $table) {
            $table->increments('houseId');
            $table->integer('userIdForeign')->unsigned();
            $table->string('houseName');
            $table->integer('houseRentPerMonth');
            $table->integer('houseRentPerDay');
            $table->integer('totalBedrooms');
            $table->integer('totalBathrooms');
            $table->text('houseArea');
            $table->string('houseCity');
            $table->string('houseState');
            $table->boolean('houseStatus')->nullable()->default(0);
            $table->timestamps();

            $table->foreign('userIdForeign')->references('userId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_details');
    }
}