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
            $table->increments('contract_id');
            $table->integer('house_id_foreign')->unsigned();
            $table->integer('tenant_id_foreign')->unsigned();
            $table->integer('total_rent');
            $table->date('signing_date');
            $table->date('contract_start');
            $table->date('contract_end');
            $table->integer('duration');
            $table->timestamps();

            $table->foreign('house_id_foreign')->references('house_id')->on('house_details');
            $table->foreign('tenant_id_foreign')->references('tenant_id')->on('tenant_details');
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