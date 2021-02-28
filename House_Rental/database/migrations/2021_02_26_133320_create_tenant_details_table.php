<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_details', function (Blueprint $table) {
            $table->increments('tenant_id');
            $table->string('tenant_name');
            $table->string('tenant_password');
            $table->integer('tenant_contact_no');
            $table->text('tenant_address');
            $table->string('tenant_area');
            $table->string('tenant_city');
            $table->string('tenant_state');
            $table->string('occupation');
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
        Schema::dropIfExists('tenant_details');
    }
}