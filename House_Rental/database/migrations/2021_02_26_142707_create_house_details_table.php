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
            $table->increments('house_id');
            $table->string('house_name');
            $table->text('address');
            $table->string('state');
            $table->string('city');
            $table->integer('rent_per_month');
            $table->boolean('status')->nullable()->default(0);
            $table->integer('seller_id_foreign')->unsigned();
            $table->timestamps();

            $table->foreign('seller_id_foreign')->references('seller_id')->on('seller_details');
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