<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->integer('tenant_id_foreign')->unsigned();
            $table->integer('contract_id_foreign')->unsigned();
            $table->integer('seller_id_foreign')->unsigned();
            $table->integer('amount');
            $table->date('payment_date');
            $table->timestamps();

            $table->foreign('tenant_id_foreign')->references('tenant_id')->on('tenant_details');
            $table->foreign('contract_id_foreign')->references('contract_id')->on('contract_details');
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
        Schema::dropIfExists('payment_details');
    }
}