<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_photos', function (Blueprint $table) {
            $table->increments('image_id');
            $table->string('image_name');
            $table->integer('house_id_foreign')->unsigned();
            $table->text('image_path');
            $table->timestamps();

            $table->foreign('house_id_foreign')->references('house_id')->on('house_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_photos');
    }
}