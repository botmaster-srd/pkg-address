<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('states')) {
            Schema::create('states', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->enum('status',['active','inactive'])->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('districts')) {
            Schema::create('districts', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('state_id');
                $table->string('name');
                $table->enum('status',['active','inactive'])->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('talukas')) {
            Schema::create('talukas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('state_id');
                $table->unsignedBigInteger('district_id');
                $table->string('name');
                $table->enum('status',['active','inactive'])->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('addresses')) {
            Schema::create('addresses', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('user_id');
                $table->string('address_type')->nullable();
                $table->unsignedBigInteger('state_id');
                $table->unsignedBigInteger('city_id');
                $table->unsignedBigInteger('pincode')->default(0);
                $table->longText('address')->nullable();
                $table->string('landmark');
                $table->enum('status',['active','inactive'])->default('active');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('talukas');
        Schema::dropIfExists('addresses');
    }
}
