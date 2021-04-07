<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_details', function (Blueprint $table) {
            $table->increments('contractId');
            $table->integer('houseIdForeign')->unsigned();
            $table->integer('userIdForeign')->unsigned();
            $table->text('startOfContract');
            $table->text('endOfContract');
            $table->integer('duration');
            $table->integer('totalRent');
            $table->timestamps();

            $table->foreign('houseIdForeign')->references('houseId')->on('house_details');
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
        Schema::dropIfExists('contract_details');
    }
}