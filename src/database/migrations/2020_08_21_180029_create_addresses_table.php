<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
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


            if (Config::get('load_state') == true) {
                DB::table('states')->insert(array (
                    0 =>
                    array (
                        'id' => 1,
                        'name' => 'Andaman and Nicobar Islands',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    1 =>
                    array (
                        'id' => 2,
                        'name' => 'Andhra Pradesh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    2 =>
                    array (
                        'id' => 3,
                        'name' => 'Arunachal Pradesh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    3 =>
                    array (
                        'id' => 4,
                        'name' => 'Assam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    4 =>
                    array (
                        'id' => 5,
                        'name' => 'Bihar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    5 =>
                    array (
                        'id' => 6,
                        'name' => 'Chhattisgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    6 =>
                    array (
                        'id' => 7,
                        'name' => 'Dadra and Nagar Haveli and Daman and Diu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    7 =>
                    array (
                        'id' => 8,
                        'name' => 'Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    8 =>
                    array (
                        'id' => 9,
                        'name' => 'Goa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    9 =>
                    array (
                        'id' => 10,
                        'name' => 'Gujarat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    10 =>
                    array (
                        'id' => 11,
                        'name' => 'Haryana',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    11 =>
                    array (
                        'id' => 12,
                        'name' => 'Himachal Pradesh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    12 =>
                    array (
                        'id' => 13,
                        'name' => 'Jammu and Kashmir',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    13 =>
                    array (
                        'id' => 14,
                        'name' => 'Jharkhand',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    14 =>
                    array (
                        'id' => 15,
                        'name' => 'Karnataka',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    15 =>
                    array (
                        'id' => 16,
                        'name' => 'Kerala',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    16 =>
                    array (
                        'id' => 17,
                        'name' => 'Ladakh union territory',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    17 =>
                    array (
                        'id' => 18,
                        'name' => 'Lakshadweep',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    18 =>
                    array (
                        'id' => 19,
                        'name' => 'Madhya Pradesh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    19 =>
                    array (
                        'id' => 20,
                        'name' => 'Maharashtra',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    20 =>
                    array (
                        'id' => 21,
                        'name' => 'Manipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    21 =>
                    array (
                        'id' => 22,
                        'name' => 'Meghalaya',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    22 =>
                    array (
                        'id' => 23,
                        'name' => 'Mizoram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    23 =>
                    array (
                        'id' => 24,
                        'name' => 'Nagaland',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    24 =>
                    array (
                        'id' => 25,
                        'name' => 'Odisha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    25 =>
                    array (
                        'id' => 26,
                        'name' => 'Puducherry',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    26 =>
                    array (
                        'id' => 27,
                        'name' => 'Punjab',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    27 =>
                    array (
                        'id' => 28,
                        'name' => 'Rajasthan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    28 =>
                    array (
                        'id' => 29,
                        'name' => 'Sikkim',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    29 =>
                    array (
                        'id' => 30,
                        'name' => 'Tamil Nadu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    30 =>
                    array (
                        'id' => 31,
                        'name' => 'Telangana',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    31 =>
                    array (
                        'id' => 32,
                        'name' => 'Tripura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    32 =>
                    array (
                        'id' => 33,
                        'name' => 'Uttar Pradesh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    33 =>
                    array (
                        'id' => 34,
                        'name' => 'Uttarakhand',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    34 =>
                    array (
                        'id' => 35,
                        'name' => 'West Bengal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                ));
            }


        }

        if (!Schema::hasTable('districts')) {
            Schema::create('districts', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('state_id');
                $table->string('name');
                $table->enum('status',['active','inactive'])->default('active');
                $table->timestamps();
            });
            if ( Config::get('load_district')  == true) {

                DB::table('districts')->insert(array (
                    0 =>
                    array (
                        'id' => 1,
                        'state_id' => 1,
                        'name' => 'Nicobar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    1 =>
                    array (
                        'id' => 2,
                        'state_id' => 1,
                        'name' => 'North and Middle Andaman',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    2 =>
                    array (
                        'id' => 3,
                        'state_id' => 1,
                        'name' => 'South Andaman',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    3 =>
                    array (
                        'id' => 4,
                        'state_id' => 2,
                        'name' => 'Anantapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    4 =>
                    array (
                        'id' => 5,
                        'state_id' => 2,
                        'name' => 'Chittoor',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    5 =>
                    array (
                        'id' => 6,
                        'state_id' => 2,
                        'name' => 'East Godavari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    6 =>
                    array (
                        'id' => 7,
                        'state_id' => 2,
                        'name' => 'Guntur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    7 =>
                    array (
                        'id' => 8,
                        'state_id' => 2,
                        'name' => 'YSR Kadapa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    8 =>
                    array (
                        'id' => 9,
                        'state_id' => 2,
                        'name' => 'Krishna',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    9 =>
                    array (
                        'id' => 10,
                        'state_id' => 2,
                        'name' => 'Kurnool',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    10 =>
                    array (
                        'id' => 11,
                        'state_id' => 2,
                        'name' => 'Prakasam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    11 =>
                    array (
                        'id' => 12,
                        'state_id' => 2,
                        'name' => 'Sri Potti Sriramulu Nellore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    12 =>
                    array (
                        'id' => 13,
                        'state_id' => 2,
                        'name' => 'Srikakulam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    13 =>
                    array (
                        'id' => 14,
                        'state_id' => 2,
                        'name' => 'Visakhapatnam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    14 =>
                    array (
                        'id' => 15,
                        'state_id' => 2,
                        'name' => 'Vizianagaram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    15 =>
                    array (
                        'id' => 16,
                        'state_id' => 2,
                        'name' => 'West Godavari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    16 =>
                    array (
                        'id' => 17,
                        'state_id' => 3,
                        'name' => 'Anjaw',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    17 =>
                    array (
                        'id' => 18,
                        'state_id' => 3,
                        'name' => 'Changlang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    18 =>
                    array (
                        'id' => 19,
                        'state_id' => 3,
                        'name' => 'East Kameng',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    19 =>
                    array (
                        'id' => 20,
                        'state_id' => 3,
                        'name' => 'East Siang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    20 =>
                    array (
                        'id' => 21,
                        'state_id' => 3,
                        'name' => 'Kamle',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    21 =>
                    array (
                        'id' => 22,
                        'state_id' => 3,
                        'name' => 'Kra Daadi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    22 =>
                    array (
                        'id' => 23,
                        'state_id' => 3,
                        'name' => 'Kurung Kumey',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    23 =>
                    array (
                        'id' => 24,
                        'state_id' => 3,
                        'name' => 'Lepa Rada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    24 =>
                    array (
                        'id' => 25,
                        'state_id' => 3,
                        'name' => 'Lohit',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    25 =>
                    array (
                        'id' => 26,
                        'state_id' => 3,
                        'name' => 'Longding',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    26 =>
                    array (
                        'id' => 27,
                        'state_id' => 3,
                        'name' => 'Lower Dibang Valley',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    27 =>
                    array (
                        'id' => 28,
                        'state_id' => 3,
                        'name' => 'Lower Siang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    28 =>
                    array (
                        'id' => 29,
                        'state_id' => 3,
                        'name' => 'Lower Subansiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    29 =>
                    array (
                        'id' => 30,
                        'state_id' => 3,
                        'name' => 'Namsai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    30 =>
                    array (
                        'id' => 31,
                        'state_id' => 3,
                        'name' => 'Pakke-Kessang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    31 =>
                    array (
                        'id' => 32,
                        'state_id' => 3,
                        'name' => 'Papum Pare',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    32 =>
                    array (
                        'id' => 33,
                        'state_id' => 3,
                        'name' => 'Shi Yomi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    33 =>
                    array (
                        'id' => 34,
                        'state_id' => 3,
                        'name' => 'Siang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    34 =>
                    array (
                        'id' => 35,
                        'state_id' => 3,
                        'name' => 'Tawang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    35 =>
                    array (
                        'id' => 36,
                        'state_id' => 3,
                        'name' => 'Tirap',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    36 =>
                    array (
                        'id' => 37,
                        'state_id' => 3,
                        'name' => 'Upper Dibang Valley',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    37 =>
                    array (
                        'id' => 38,
                        'state_id' => 3,
                        'name' => 'Upper Siang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    38 =>
                    array (
                        'id' => 39,
                        'state_id' => 3,
                        'name' => 'Upper Subansiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    39 =>
                    array (
                        'id' => 40,
                        'state_id' => 3,
                        'name' => 'West Kameng',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    40 =>
                    array (
                        'id' => 41,
                        'state_id' => 3,
                        'name' => 'West Siang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    41 =>
                    array (
                        'id' => 42,
                        'state_id' => 4,
                        'name' => 'Baksa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    42 =>
                    array (
                        'id' => 43,
                        'state_id' => 4,
                        'name' => 'Barpeta',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    43 =>
                    array (
                        'id' => 44,
                        'state_id' => 4,
                        'name' => 'Bishwanath',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    44 =>
                    array (
                        'id' => 45,
                        'state_id' => 4,
                        'name' => 'Bongaigaon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    45 =>
                    array (
                        'id' => 46,
                        'state_id' => 4,
                        'name' => 'Cachar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    46 =>
                    array (
                        'id' => 47,
                        'state_id' => 4,
                        'name' => 'Charaideo',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    47 =>
                    array (
                        'id' => 48,
                        'state_id' => 4,
                        'name' => 'Chirang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    48 =>
                    array (
                        'id' => 49,
                        'state_id' => 4,
                        'name' => 'Darrang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    49 =>
                    array (
                        'id' => 50,
                        'state_id' => 4,
                        'name' => 'Dhemaji',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    50 =>
                    array (
                        'id' => 51,
                        'state_id' => 4,
                        'name' => 'Dhubri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    51 =>
                    array (
                        'id' => 52,
                        'state_id' => 4,
                        'name' => 'Dibrugarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    52 =>
                    array (
                        'id' => 53,
                        'state_id' => 4,
                        'name' => 'Dima Hasao',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    53 =>
                    array (
                        'id' => 54,
                        'state_id' => 4,
                        'name' => 'Goalpara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    54 =>
                    array (
                        'id' => 55,
                        'state_id' => 4,
                        'name' => 'Golaghat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    55 =>
                    array (
                        'id' => 56,
                        'state_id' => 4,
                        'name' => 'Hailakandi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    56 =>
                    array (
                        'id' => 57,
                        'state_id' => 4,
                        'name' => 'Hojai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    57 =>
                    array (
                        'id' => 58,
                        'state_id' => 4,
                        'name' => 'Jorhat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    58 =>
                    array (
                        'id' => 59,
                        'state_id' => 4,
                        'name' => 'Kamrup',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    59 =>
                    array (
                        'id' => 60,
                        'state_id' => 4,
                        'name' => 'Kamrup Metropolitan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    60 =>
                    array (
                        'id' => 61,
                        'state_id' => 4,
                        'name' => 'Karbi Anglong',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    61 =>
                    array (
                        'id' => 62,
                        'state_id' => 4,
                        'name' => 'Karimganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    62 =>
                    array (
                        'id' => 63,
                        'state_id' => 4,
                        'name' => 'Kokrajhar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    63 =>
                    array (
                        'id' => 64,
                        'state_id' => 5,
                        'name' => 'Araria',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    64 =>
                    array (
                        'id' => 65,
                        'state_id' => 5,
                        'name' => 'Arwal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    65 =>
                    array (
                        'id' => 66,
                        'state_id' => 5,
                        'name' => 'Aurangabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    66 =>
                    array (
                        'id' => 67,
                        'state_id' => 5,
                        'name' => 'Banka',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    67 =>
                    array (
                        'id' => 68,
                        'state_id' => 5,
                        'name' => 'Begusarai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    68 =>
                    array (
                        'id' => 69,
                        'state_id' => 5,
                        'name' => 'Bhagalpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    69 =>
                    array (
                        'id' => 70,
                        'state_id' => 5,
                        'name' => 'Bhojpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    70 =>
                    array (
                        'id' => 71,
                        'state_id' => 5,
                        'name' => 'Buxar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    71 =>
                    array (
                        'id' => 72,
                        'state_id' => 5,
                        'name' => 'Darbhanga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    72 =>
                    array (
                        'id' => 73,
                        'state_id' => 5,
                        'name' => 'East Champaran',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    73 =>
                    array (
                        'id' => 74,
                        'state_id' => 5,
                        'name' => 'Gaya',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    74 =>
                    array (
                        'id' => 75,
                        'state_id' => 5,
                        'name' => 'Gopalganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    75 =>
                    array (
                        'id' => 76,
                        'state_id' => 5,
                        'name' => 'Jamui',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    76 =>
                    array (
                        'id' => 77,
                        'state_id' => 5,
                        'name' => 'Jehanabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    77 =>
                    array (
                        'id' => 78,
                        'state_id' => 5,
                        'name' => 'Kaimur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    78 =>
                    array (
                        'id' => 79,
                        'state_id' => 5,
                        'name' => 'Katihar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    79 =>
                    array (
                        'id' => 80,
                        'state_id' => 5,
                        'name' => 'Khagaria',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    80 =>
                    array (
                        'id' => 81,
                        'state_id' => 5,
                        'name' => 'Kishanganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    81 =>
                    array (
                        'id' => 82,
                        'state_id' => 5,
                        'name' => 'Lakhisarai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    82 =>
                    array (
                        'id' => 83,
                        'state_id' => 5,
                        'name' => 'Madhepura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    83 =>
                    array (
                        'id' => 84,
                        'state_id' => 5,
                        'name' => 'Madhubani',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    84 =>
                    array (
                        'id' => 85,
                        'state_id' => 5,
                        'name' => 'Munger',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    85 =>
                    array (
                        'id' => 86,
                        'state_id' => 5,
                        'name' => 'Muzaffarpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    86 =>
                    array (
                        'id' => 87,
                        'state_id' => 5,
                        'name' => 'Nalanda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    87 =>
                    array (
                        'id' => 88,
                        'state_id' => 5,
                        'name' => 'Nawada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    88 =>
                    array (
                        'id' => 89,
                        'state_id' => 5,
                        'name' => 'Patna',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    89 =>
                    array (
                        'id' => 90,
                        'state_id' => 5,
                        'name' => 'Purnia',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    90 =>
                    array (
                        'id' => 91,
                        'state_id' => 5,
                        'name' => 'Rohtas',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    91 =>
                    array (
                        'id' => 92,
                        'state_id' => 5,
                        'name' => 'Saharsa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    92 =>
                    array (
                        'id' => 93,
                        'state_id' => 5,
                        'name' => 'Samastipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    93 =>
                    array (
                        'id' => 94,
                        'state_id' => 5,
                        'name' => 'Saran',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    94 =>
                    array (
                        'id' => 95,
                        'state_id' => 5,
                        'name' => 'Sheikhpura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    95 =>
                    array (
                        'id' => 96,
                        'state_id' => 5,
                        'name' => 'Sheohar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    96 =>
                    array (
                        'id' => 97,
                        'state_id' => 5,
                        'name' => 'Sitamarhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    97 =>
                    array (
                        'id' => 98,
                        'state_id' => 5,
                        'name' => 'Siwan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    98 =>
                    array (
                        'id' => 99,
                        'state_id' => 5,
                        'name' => 'Supaul',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    99 =>
                    array (
                        'id' => 100,
                        'state_id' => 5,
                        'name' => 'Vaishali',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    100 =>
                    array (
                        'id' => 101,
                        'state_id' => 5,
                        'name' => 'West Champaran',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    101 =>
                    array (
                        'id' => 102,
                        'state_id' => 6,
                        'name' => 'Balod',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    102 =>
                    array (
                        'id' => 103,
                        'state_id' => 6,
                        'name' => 'Baloda Bazar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    103 =>
                    array (
                        'id' => 104,
                        'state_id' => 6,
                        'name' => 'Balrampur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    104 =>
                    array (
                        'id' => 105,
                        'state_id' => 6,
                        'name' => 'Bas3a2asta2astar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    105 =>
                    array (
                        'id' => 106,
                        'state_id' => 6,
                        'name' => 'Bemetara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    106 =>
                    array (
                        'id' => 107,
                        'state_id' => 6,
                        'name' => 'Bijapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    107 =>
                    array (
                        'id' => 108,
                        'state_id' => 6,
                        'name' => 'Bilaspur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    108 =>
                    array (
                        'id' => 109,
                        'state_id' => 6,
                        'name' => 'Dantewada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    109 =>
                    array (
                        'id' => 110,
                        'state_id' => 6,
                        'name' => 'Dhamtari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    110 =>
                    array (
                        'id' => 111,
                        'state_id' => 6,
                        'name' => 'Durg',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    111 =>
                    array (
                        'id' => 112,
                        'state_id' => 6,
                        'name' => 'Gariaband',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    112 =>
                    array (
                        'id' => 113,
                        'state_id' => 6,
                        'name' => 'Gaurela-Pendra-Marwahi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    113 =>
                    array (
                        'id' => 114,
                        'state_id' => 6,
                        'name' => 'Janjgir-Champa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    114 =>
                    array (
                        'id' => 115,
                        'state_id' => 6,
                        'name' => 'Jashpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    115 =>
                    array (
                        'id' => 116,
                        'state_id' => 6,
                        'name' => 'Kabirdham',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    116 =>
                    array (
                        'id' => 117,
                        'state_id' => 6,
                        'name' => 'Kanker',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    117 =>
                    array (
                        'id' => 118,
                        'state_id' => 6,
                        'name' => 'Kondagaon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    118 =>
                    array (
                        'id' => 119,
                        'state_id' => 6,
                        'name' => 'Korba',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    119 =>
                    array (
                        'id' => 120,
                        'state_id' => 6,
                        'name' => 'Koriya',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    120 =>
                    array (
                        'id' => 121,
                        'state_id' => 6,
                        'name' => 'Mahasamund',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    121 =>
                    array (
                        'id' => 122,
                        'state_id' => 6,
                        'name' => 'Mungeli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    122 =>
                    array (
                        'id' => 123,
                        'state_id' => 6,
                        'name' => 'Narayanpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    123 =>
                    array (
                        'id' => 124,
                        'state_id' => 6,
                        'name' => 'Raigarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    124 =>
                    array (
                        'id' => 125,
                        'state_id' => 6,
                        'name' => 'Raipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    125 =>
                    array (
                        'id' => 126,
                        'state_id' => 6,
                        'name' => 'Rajnandgaon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    126 =>
                    array (
                        'id' => 127,
                        'state_id' => 6,
                        'name' => 'Sukma',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    127 =>
                    array (
                        'id' => 128,
                        'state_id' => 6,
                        'name' => 'Surajpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    128 =>
                    array (
                        'id' => 129,
                        'state_id' => 6,
                        'name' => 'Surguja',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    129 =>
                    array (
                        'id' => 130,
                        'state_id' => 7,
                        'name' => 'Daman',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    130 =>
                    array (
                        'id' => 131,
                        'state_id' => 7,
                        'name' => 'Diu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    131 =>
                    array (
                        'id' => 132,
                        'state_id' => 7,
                        'name' => 'Dadra and Nagar Haveli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    132 =>
                    array (
                        'id' => 133,
                        'state_id' => 8,
                        'name' => 'Central Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    133 =>
                    array (
                        'id' => 134,
                        'state_id' => 8,
                        'name' => 'East Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    134 =>
                    array (
                        'id' => 135,
                        'state_id' => 8,
                        'name' => 'New Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    135 =>
                    array (
                        'id' => 136,
                        'state_id' => 8,
                        'name' => 'North Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    136 =>
                    array (
                        'id' => 137,
                        'state_id' => 8,
                        'name' => 'North East Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    137 =>
                    array (
                        'id' => 138,
                        'state_id' => 8,
                        'name' => 'North West Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    138 =>
                    array (
                        'id' => 139,
                        'state_id' => 8,
                        'name' => 'Shahdara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    139 =>
                    array (
                        'id' => 140,
                        'state_id' => 8,
                        'name' => 'South Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    140 =>
                    array (
                        'id' => 141,
                        'state_id' => 8,
                        'name' => 'South East Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    141 =>
                    array (
                        'id' => 142,
                        'state_id' => 8,
                        'name' => 'South West Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    142 =>
                    array (
                        'id' => 143,
                        'state_id' => 8,
                        'name' => 'West Delhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    143 =>
                    array (
                        'id' => 144,
                        'state_id' => 9,
                        'name' => 'Nort Goa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    144 =>
                    array (
                        'id' => 145,
                        'state_id' => 9,
                        'name' => 'South Goa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    145 =>
                    array (
                        'id' => 146,
                        'state_id' => 10,
                        'name' => 'Ahmedabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    146 =>
                    array (
                        'id' => 147,
                        'state_id' => 10,
                        'name' => 'Amreli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    147 =>
                    array (
                        'id' => 148,
                        'state_id' => 10,
                        'name' => 'Anand',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    148 =>
                    array (
                        'id' => 149,
                        'state_id' => 10,
                        'name' => 'Aravalli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    149 =>
                    array (
                        'id' => 150,
                        'state_id' => 10,
                        'name' => 'Banaskantha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    150 =>
                    array (
                        'id' => 151,
                        'state_id' => 10,
                        'name' => 'Bharuch',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    151 =>
                    array (
                        'id' => 152,
                        'state_id' => 10,
                        'name' => 'Bhavnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    152 =>
                    array (
                        'id' => 153,
                        'state_id' => 10,
                        'name' => 'Botad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    153 =>
                    array (
                        'id' => 154,
                        'state_id' => 10,
                        'name' => 'Chhota Udepur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    154 =>
                    array (
                        'id' => 155,
                        'state_id' => 10,
                        'name' => 'Dahod',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    155 =>
                    array (
                        'id' => 156,
                        'state_id' => 10,
                        'name' => 'Dang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    156 =>
                    array (
                        'id' => 157,
                        'state_id' => 10,
                        'name' => 'Devbhoomi Dwarka',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    157 =>
                    array (
                        'id' => 158,
                        'state_id' => 10,
                        'name' => 'Gandhinagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    158 =>
                    array (
                        'id' => 159,
                        'state_id' => 10,
                        'name' => 'Gir Somnath',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    159 =>
                    array (
                        'id' => 160,
                        'state_id' => 10,
                        'name' => 'Jamnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    160 =>
                    array (
                        'id' => 161,
                        'state_id' => 10,
                        'name' => 'Junagadh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    161 =>
                    array (
                        'id' => 162,
                        'state_id' => 10,
                        'name' => 'Kheda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    162 =>
                    array (
                        'id' => 163,
                        'state_id' => 10,
                        'name' => 'Kutch',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    163 =>
                    array (
                        'id' => 164,
                        'state_id' => 10,
                        'name' => 'Mahisagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    164 =>
                    array (
                        'id' => 165,
                        'state_id' => 10,
                        'name' => 'Mehsana',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    165 =>
                    array (
                        'id' => 166,
                        'state_id' => 10,
                        'name' => 'Morbi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    166 =>
                    array (
                        'id' => 167,
                        'state_id' => 10,
                        'name' => 'Narmada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    167 =>
                    array (
                        'id' => 168,
                        'state_id' => 10,
                        'name' => 'Navsari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    168 =>
                    array (
                        'id' => 169,
                        'state_id' => 10,
                        'name' => 'Panchmahal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    169 =>
                    array (
                        'id' => 170,
                        'state_id' => 10,
                        'name' => 'Patan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    170 =>
                    array (
                        'id' => 171,
                        'state_id' => 10,
                        'name' => 'Porbandar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    171 =>
                    array (
                        'id' => 172,
                        'state_id' => 10,
                        'name' => 'Rajkot',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    172 =>
                    array (
                        'id' => 173,
                        'state_id' => 10,
                        'name' => 'Sabarkantha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    173 =>
                    array (
                        'id' => 174,
                        'state_id' => 10,
                        'name' => 'Surat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    174 =>
                    array (
                        'id' => 175,
                        'state_id' => 10,
                        'name' => 'Surendranagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    175 =>
                    array (
                        'id' => 176,
                        'state_id' => 10,
                        'name' => 'Tapi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    176 =>
                    array (
                        'id' => 177,
                        'state_id' => 10,
                        'name' => 'Vadodara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    177 =>
                    array (
                        'id' => 178,
                        'state_id' => 10,
                        'name' => 'Valsad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    178 =>
                    array (
                        'id' => 179,
                        'state_id' => 11,
                        'name' => 'Ambala',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    179 =>
                    array (
                        'id' => 180,
                        'state_id' => 11,
                        'name' => 'Bhiwan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    180 =>
                    array (
                        'id' => 181,
                        'state_id' => 11,
                        'name' => 'Charkhi Dadri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    181 =>
                    array (
                        'id' => 182,
                        'state_id' => 11,
                        'name' => 'Faridabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    182 =>
                    array (
                        'id' => 183,
                        'state_id' => 11,
                        'name' => 'Fatehabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    183 =>
                    array (
                        'id' => 184,
                        'state_id' => 11,
                        'name' => 'Gurgaon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    184 =>
                    array (
                        'id' => 185,
                        'state_id' => 11,
                        'name' => 'Hissar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    185 =>
                    array (
                        'id' => 186,
                        'state_id' => 11,
                        'name' => 'Jhajjar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    186 =>
                    array (
                        'id' => 187,
                        'state_id' => 11,
                        'name' => 'Jind',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    187 =>
                    array (
                        'id' => 188,
                        'state_id' => 11,
                        'name' => 'Kaithal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    188 =>
                    array (
                        'id' => 189,
                        'state_id' => 11,
                        'name' => 'Karnal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    189 =>
                    array (
                        'id' => 190,
                        'state_id' => 11,
                        'name' => 'Kurukshetra',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    190 =>
                    array (
                        'id' => 191,
                        'state_id' => 11,
                        'name' => 'Mahendragarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    191 =>
                    array (
                        'id' => 192,
                        'state_id' => 11,
                        'name' => 'Nuh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    192 =>
                    array (
                        'id' => 193,
                        'state_id' => 11,
                        'name' => 'Palwal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    193 =>
                    array (
                        'id' => 194,
                        'state_id' => 11,
                        'name' => 'Panchkula',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    194 =>
                    array (
                        'id' => 195,
                        'state_id' => 11,
                        'name' => 'Panipat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    195 =>
                    array (
                        'id' => 196,
                        'state_id' => 11,
                        'name' => 'Rewari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    196 =>
                    array (
                        'id' => 197,
                        'state_id' => 11,
                        'name' => 'Rohtak',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    197 =>
                    array (
                        'id' => 198,
                        'state_id' => 11,
                        'name' => 'Sirsa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    198 =>
                    array (
                        'id' => 199,
                        'state_id' => 11,
                        'name' => 'Sonipat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    199 =>
                    array (
                        'id' => 200,
                        'state_id' => 11,
                        'name' => 'Yamuna Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    200 =>
                    array (
                        'id' => 201,
                        'state_id' => 12,
                        'name' => 'Bilaspur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    201 =>
                    array (
                        'id' => 202,
                        'state_id' => 12,
                        'name' => 'Chamba',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    202 =>
                    array (
                        'id' => 203,
                        'state_id' => 12,
                        'name' => 'Hamirpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    203 =>
                    array (
                        'id' => 204,
                        'state_id' => 12,
                        'name' => 'Kangra',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    204 =>
                    array (
                        'id' => 205,
                        'state_id' => 12,
                        'name' => 'Kinnaur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    205 =>
                    array (
                        'id' => 206,
                        'state_id' => 12,
                        'name' => 'Kullu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    206 =>
                    array (
                        'id' => 207,
                        'state_id' => 12,
                        'name' => 'Lahaul and Spiti',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    207 =>
                    array (
                        'id' => 208,
                        'state_id' => 12,
                        'name' => 'Mandi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    208 =>
                    array (
                        'id' => 209,
                        'state_id' => 12,
                        'name' => 'Shimla',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    209 =>
                    array (
                        'id' => 210,
                        'state_id' => 12,
                        'name' => 'Sirmaur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    210 =>
                    array (
                        'id' => 211,
                        'state_id' => 12,
                        'name' => 'Solan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    211 =>
                    array (
                        'id' => 212,
                        'state_id' => 12,
                        'name' => 'Una',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    212 =>
                    array (
                        'id' => 213,
                        'state_id' => 13,
                        'name' => 'Anantnag',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    213 =>
                    array (
                        'id' => 214,
                        'state_id' => 13,
                        'name' => 'Bandipora',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    214 =>
                    array (
                        'id' => 215,
                        'state_id' => 13,
                        'name' => 'Baramulla',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    215 =>
                    array (
                        'id' => 216,
                        'state_id' => 13,
                        'name' => 'Badgam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    216 =>
                    array (
                        'id' => 217,
                        'state_id' => 13,
                        'name' => 'Doda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    217 =>
                    array (
                        'id' => 218,
                        'state_id' => 13,
                        'name' => 'Ganderbal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    218 =>
                    array (
                        'id' => 219,
                        'state_id' => 13,
                        'name' => 'Jammu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    219 =>
                    array (
                        'id' => 220,
                        'state_id' => 13,
                        'name' => 'Kathua',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    220 =>
                    array (
                        'id' => 221,
                        'state_id' => 13,
                        'name' => 'Kishtwar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    221 =>
                    array (
                        'id' => 222,
                        'state_id' => 13,
                        'name' => 'Kulgam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    222 =>
                    array (
                        'id' => 223,
                        'state_id' => 13,
                        'name' => 'Kupwara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    223 =>
                    array (
                        'id' => 224,
                        'state_id' => 13,
                        'name' => 'Poonch',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    224 =>
                    array (
                        'id' => 225,
                        'state_id' => 13,
                        'name' => 'Pulwama',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    225 =>
                    array (
                        'id' => 226,
                        'state_id' => 13,
                        'name' => 'Rajouri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    226 =>
                    array (
                        'id' => 227,
                        'state_id' => 13,
                        'name' => 'Ramban',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    227 =>
                    array (
                        'id' => 228,
                        'state_id' => 13,
                        'name' => 'Reasi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    228 =>
                    array (
                        'id' => 229,
                        'state_id' => 13,
                        'name' => 'Samba',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    229 =>
                    array (
                        'id' => 230,
                        'state_id' => 13,
                        'name' => 'Shopian',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    230 =>
                    array (
                        'id' => 231,
                        'state_id' => 13,
                        'name' => 'Srinagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    231 =>
                    array (
                        'id' => 232,
                        'state_id' => 13,
                        'name' => 'Udhampur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    232 =>
                    array (
                        'id' => 233,
                        'state_id' => 14,
                        'name' => 'Bokaro',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    233 =>
                    array (
                        'id' => 234,
                        'state_id' => 14,
                        'name' => 'Chatra',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    234 =>
                    array (
                        'id' => 235,
                        'state_id' => 14,
                        'name' => 'Deoghar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    235 =>
                    array (
                        'id' => 236,
                        'state_id' => 14,
                        'name' => 'Dhanbad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    236 =>
                    array (
                        'id' => 237,
                        'state_id' => 14,
                        'name' => 'Dumka',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    237 =>
                    array (
                        'id' => 238,
                        'state_id' => 14,
                        'name' => 'East Singhbhum',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    238 =>
                    array (
                        'id' => 239,
                        'state_id' => 14,
                        'name' => 'Garhwa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    239 =>
                    array (
                        'id' => 240,
                        'state_id' => 14,
                        'name' => 'Giridih',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    240 =>
                    array (
                        'id' => 241,
                        'state_id' => 14,
                        'name' => 'Godda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    241 =>
                    array (
                        'id' => 242,
                        'state_id' => 14,
                        'name' => 'Gumla',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    242 =>
                    array (
                        'id' => 243,
                        'state_id' => 14,
                        'name' => 'Hazaribag',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    243 =>
                    array (
                        'id' => 244,
                        'state_id' => 14,
                        'name' => 'Jamtara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    244 =>
                    array (
                        'id' => 245,
                        'state_id' => 14,
                        'name' => 'Khunti',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    245 =>
                    array (
                        'id' => 246,
                        'state_id' => 14,
                        'name' => 'Koderma',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    246 =>
                    array (
                        'id' => 247,
                        'state_id' => 14,
                        'name' => 'Latehar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    247 =>
                    array (
                        'id' => 248,
                        'state_id' => 14,
                        'name' => 'Lohardaga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    248 =>
                    array (
                        'id' => 249,
                        'state_id' => 14,
                        'name' => 'Pakur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    249 =>
                    array (
                        'id' => 250,
                        'state_id' => 14,
                        'name' => 'Palamu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    250 =>
                    array (
                        'id' => 251,
                        'state_id' => 14,
                        'name' => 'Ramgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    251 =>
                    array (
                        'id' => 252,
                        'state_id' => 14,
                        'name' => 'Ranchi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    252 =>
                    array (
                        'id' => 253,
                        'state_id' => 14,
                        'name' => 'Sahibganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    253 =>
                    array (
                        'id' => 254,
                        'state_id' => 14,
                        'name' => 'Seraikela Kharsawan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    254 =>
                    array (
                        'id' => 255,
                        'state_id' => 14,
                        'name' => 'Simdega',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    255 =>
                    array (
                        'id' => 256,
                        'state_id' => 14,
                        'name' => 'West Singhbhum',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    256 =>
                    array (
                        'id' => 257,
                        'state_id' => 15,
                        'name' => 'Bagalkot',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    257 =>
                    array (
                        'id' => 258,
                        'state_id' => 15,
                        'name' => 'Ballari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    258 =>
                    array (
                        'id' => 259,
                        'state_id' => 15,
                        'name' => 'Belgaum',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    259 =>
                    array (
                        'id' => 260,
                        'state_id' => 15,
                        'name' => 'Bangalore Rural',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    260 =>
                    array (
                        'id' => 261,
                        'state_id' => 15,
                        'name' => 'Bangalore Urban',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    261 =>
                    array (
                        'id' => 262,
                        'state_id' => 15,
                        'name' => 'Bidar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    262 =>
                    array (
                        'id' => 263,
                        'state_id' => 15,
                        'name' => 'Chamarajnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    263 =>
                    array (
                        'id' => 264,
                        'state_id' => 15,
                        'name' => 'Chikkaballapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    264 =>
                    array (
                        'id' => 265,
                        'state_id' => 15,
                        'name' => 'Chikkamagaluru',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    265 =>
                    array (
                        'id' => 266,
                        'state_id' => 15,
                        'name' => 'Chitradurga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    266 =>
                    array (
                        'id' => 267,
                        'state_id' => 15,
                        'name' => 'Dakshina Kannada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    267 =>
                    array (
                        'id' => 268,
                        'state_id' => 15,
                        'name' => 'Davanagere',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    268 =>
                    array (
                        'id' => 269,
                        'state_id' => 15,
                        'name' => 'Dharwad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    269 =>
                    array (
                        'id' => 270,
                        'state_id' => 15,
                        'name' => 'Gadag',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    270 =>
                    array (
                        'id' => 271,
                        'state_id' => 15,
                        'name' => 'Gulbarga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    271 =>
                    array (
                        'id' => 272,
                        'state_id' => 15,
                        'name' => 'Hassan',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    272 =>
                    array (
                        'id' => 273,
                        'state_id' => 15,
                        'name' => 'Haveri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    273 =>
                    array (
                        'id' => 274,
                        'state_id' => 15,
                        'name' => 'Kodagu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    274 =>
                    array (
                        'id' => 275,
                        'state_id' => 15,
                        'name' => 'Kolar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    275 =>
                    array (
                        'id' => 276,
                        'state_id' => 15,
                        'name' => 'Koppal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    276 =>
                    array (
                        'id' => 277,
                        'state_id' => 15,
                        'name' => 'Mandya',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    277 =>
                    array (
                        'id' => 278,
                        'state_id' => 15,
                        'name' => 'Mysuru',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    278 =>
                    array (
                        'id' => 279,
                        'state_id' => 15,
                        'name' => 'Raichur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    279 =>
                    array (
                        'id' => 280,
                        'state_id' => 15,
                        'name' => 'Ramanagara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    280 =>
                    array (
                        'id' => 281,
                        'state_id' => 15,
                        'name' => 'Shimoga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    281 =>
                    array (
                        'id' => 282,
                        'state_id' => 15,
                        'name' => 'Tumakuru',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    282 =>
                    array (
                        'id' => 283,
                        'state_id' => 15,
                        'name' => 'Udupi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    283 =>
                    array (
                        'id' => 284,
                        'state_id' => 15,
                        'name' => 'Uttara Kannada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    284 =>
                    array (
                        'id' => 285,
                        'state_id' => 15,
                        'name' => 'Vijayapura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    285 =>
                    array (
                        'id' => 286,
                        'state_id' => 15,
                        'name' => 'Yadgir',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    286 =>
                    array (
                        'id' => 287,
                        'state_id' => 16,
                        'name' => 'Alappuzha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    287 =>
                    array (
                        'id' => 288,
                        'state_id' => 16,
                        'name' => 'Ernakulam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    288 =>
                    array (
                        'id' => 289,
                        'state_id' => 16,
                        'name' => 'Idukki',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    289 =>
                    array (
                        'id' => 290,
                        'state_id' => 16,
                        'name' => 'Kannur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    290 =>
                    array (
                        'id' => 291,
                        'state_id' => 16,
                        'name' => 'Kasaragod',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    291 =>
                    array (
                        'id' => 292,
                        'state_id' => 16,
                        'name' => 'Kollam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    292 =>
                    array (
                        'id' => 293,
                        'state_id' => 16,
                        'name' => 'Kottayam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    293 =>
                    array (
                        'id' => 294,
                        'state_id' => 16,
                        'name' => 'Kozhikode',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    294 =>
                    array (
                        'id' => 295,
                        'state_id' => 16,
                        'name' => 'Malappuram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    295 =>
                    array (
                        'id' => 296,
                        'state_id' => 16,
                        'name' => 'Palakkad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    296 =>
                    array (
                        'id' => 297,
                        'state_id' => 16,
                        'name' => 'Pathanamthitta',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    297 =>
                    array (
                        'id' => 298,
                        'state_id' => 16,
                        'name' => 'Thrissur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    298 =>
                    array (
                        'id' => 299,
                        'state_id' => 16,
                        'name' => 'Thiruvananthapuram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    299 =>
                    array (
                        'id' => 300,
                        'state_id' => 16,
                        'name' => 'Wayanad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    300 =>
                    array (
                        'id' => 301,
                        'state_id' => 17,
                        'name' => 'Kargil',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    301 =>
                    array (
                        'id' => 302,
                        'state_id' => 17,
                        'name' => 'Leh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    302 =>
                    array (
                        'id' => 303,
                        'state_id' => 18,
                        'name' => 'lakshadweep',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    303 =>
                    array (
                        'id' => 304,
                        'state_id' => 19,
                        'name' => 'Agar Malwa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    304 =>
                    array (
                        'id' => 305,
                        'state_id' => 19,
                        'name' => 'Alirajpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    305 =>
                    array (
                        'id' => 306,
                        'state_id' => 19,
                        'name' => 'Anuppur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    306 =>
                    array (
                        'id' => 307,
                        'state_id' => 19,
                        'name' => 'Ashok Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    307 =>
                    array (
                        'id' => 308,
                        'state_id' => 19,
                        'name' => 'Balaghat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    308 =>
                    array (
                        'id' => 309,
                        'state_id' => 19,
                        'name' => 'Barwani',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    309 =>
                    array (
                        'id' => 310,
                        'state_id' => 19,
                        'name' => 'Betul',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    310 =>
                    array (
                        'id' => 311,
                        'state_id' => 19,
                        'name' => 'Bhind',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    311 =>
                    array (
                        'id' => 312,
                        'state_id' => 19,
                        'name' => 'Bhopal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    312 =>
                    array (
                        'id' => 313,
                        'state_id' => 19,
                        'name' => 'Burhanpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    313 =>
                    array (
                        'id' => 314,
                        'state_id' => 19,
                        'name' => 'Chachaura-Binaganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    314 =>
                    array (
                        'id' => 315,
                        'state_id' => 19,
                        'name' => 'Chhatarpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    315 =>
                    array (
                        'id' => 316,
                        'state_id' => 19,
                        'name' => 'Chhindwara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    316 =>
                    array (
                        'id' => 317,
                        'state_id' => 19,
                        'name' => 'Damoh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    317 =>
                    array (
                        'id' => 318,
                        'state_id' => 19,
                        'name' => 'Datia',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    318 =>
                    array (
                        'id' => 319,
                        'state_id' => 19,
                        'name' => 'Dewas',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    319 =>
                    array (
                        'id' => 320,
                        'state_id' => 19,
                        'name' => 'Dhar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    320 =>
                    array (
                        'id' => 321,
                        'state_id' => 19,
                        'name' => 'Dindori',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    321 =>
                    array (
                        'id' => 322,
                        'state_id' => 19,
                        'name' => 'Guna',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    322 =>
                    array (
                        'id' => 323,
                        'state_id' => 19,
                        'name' => 'Gwalior',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    323 =>
                    array (
                        'id' => 324,
                        'state_id' => 19,
                        'name' => 'Harda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    324 =>
                    array (
                        'id' => 325,
                        'state_id' => 19,
                        'name' => 'Hoshangabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    325 =>
                    array (
                        'id' => 326,
                        'state_id' => 19,
                        'name' => 'Indore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    326 =>
                    array (
                        'id' => 327,
                        'state_id' => 19,
                        'name' => 'Jabalpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    327 =>
                    array (
                        'id' => 328,
                        'state_id' => 19,
                        'name' => 'Jhabua',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    328 =>
                    array (
                        'id' => 329,
                        'state_id' => 19,
                        'name' => 'Katni',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    329 =>
                    array (
                        'id' => 330,
                        'state_id' => 19,
                    'name' => 'Khandwa (East Nimar)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    330 =>
                    array (
                        'id' => 331,
                        'state_id' => 19,
                    'name' => 'Khargone (West Nimar)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    331 =>
                    array (
                        'id' => 332,
                        'state_id' => 19,
                        'name' => 'Maihar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    332 =>
                    array (
                        'id' => 333,
                        'state_id' => 19,
                        'name' => 'Mandla',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    333 =>
                    array (
                        'id' => 334,
                        'state_id' => 19,
                        'name' => 'Mandsaur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    334 =>
                    array (
                        'id' => 335,
                        'state_id' => 19,
                        'name' => 'Morena',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    335 =>
                    array (
                        'id' => 336,
                        'state_id' => 19,
                        'name' => 'Narsinghpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    336 =>
                    array (
                        'id' => 337,
                        'state_id' => 19,
                        'name' => 'Nagda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    337 =>
                    array (
                        'id' => 338,
                        'state_id' => 19,
                        'name' => 'Neemuch',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    338 =>
                    array (
                        'id' => 339,
                        'state_id' => 19,
                        'name' => 'Niwari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    339 =>
                    array (
                        'id' => 340,
                        'state_id' => 19,
                        'name' => 'Panna',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    340 =>
                    array (
                        'id' => 341,
                        'state_id' => 19,
                        'name' => 'Raisen',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    341 =>
                    array (
                        'id' => 342,
                        'state_id' => 19,
                        'name' => 'Rajgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    342 =>
                    array (
                        'id' => 343,
                        'state_id' => 19,
                        'name' => 'Ratlam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    343 =>
                    array (
                        'id' => 344,
                        'state_id' => 19,
                        'name' => 'Rewa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    344 =>
                    array (
                        'id' => 345,
                        'state_id' => 19,
                        'name' => 'Sagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    345 =>
                    array (
                        'id' => 346,
                        'state_id' => 19,
                        'name' => 'Satna',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    346 =>
                    array (
                        'id' => 347,
                        'state_id' => 19,
                        'name' => 'Sehore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    347 =>
                    array (
                        'id' => 348,
                        'state_id' => 19,
                        'name' => 'Seoni',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    348 =>
                    array (
                        'id' => 349,
                        'state_id' => 19,
                        'name' => 'Shahdol',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    349 =>
                    array (
                        'id' => 350,
                        'state_id' => 19,
                        'name' => 'Shajapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    350 =>
                    array (
                        'id' => 351,
                        'state_id' => 19,
                        'name' => 'Sheopur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    351 =>
                    array (
                        'id' => 352,
                        'state_id' => 19,
                        'name' => 'Shivpuri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    352 =>
                    array (
                        'id' => 353,
                        'state_id' => 19,
                        'name' => 'Sidhi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    353 =>
                    array (
                        'id' => 354,
                        'state_id' => 19,
                        'name' => 'Singrauli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    354 =>
                    array (
                        'id' => 355,
                        'state_id' => 19,
                        'name' => 'Tikamgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    355 =>
                    array (
                        'id' => 356,
                        'state_id' => 19,
                        'name' => 'Ujjain',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    356 =>
                    array (
                        'id' => 357,
                        'state_id' => 19,
                        'name' => 'Umaria',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    357 =>
                    array (
                        'id' => 358,
                        'state_id' => 19,
                        'name' => 'Vidisha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    358 =>
                    array (
                        'id' => 359,
                        'state_id' => 20,
                        'name' => 'Akola',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    359 =>
                    array (
                        'id' => 360,
                        'state_id' => 20,
                        'name' => 'Amravati',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    360 =>
                    array (
                        'id' => 361,
                        'state_id' => 20,
                        'name' => 'Aurangabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    361 =>
                    array (
                        'id' => 362,
                        'state_id' => 20,
                        'name' => 'Beed',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    362 =>
                    array (
                        'id' => 363,
                        'state_id' => 20,
                        'name' => 'Bhandara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    363 =>
                    array (
                        'id' => 364,
                        'state_id' => 20,
                        'name' => 'Buldhana',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    364 =>
                    array (
                        'id' => 365,
                        'state_id' => 20,
                        'name' => 'Chandrapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    365 =>
                    array (
                        'id' => 366,
                        'state_id' => 20,
                        'name' => 'Dhule',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    366 =>
                    array (
                        'id' => 367,
                        'state_id' => 20,
                        'name' => 'Gadchiroli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    367 =>
                    array (
                        'id' => 368,
                        'state_id' => 20,
                        'name' => 'Gondia',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    368 =>
                    array (
                        'id' => 369,
                        'state_id' => 20,
                        'name' => 'Hingoli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    369 =>
                    array (
                        'id' => 370,
                        'state_id' => 20,
                        'name' => 'Jalgaon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    370 =>
                    array (
                        'id' => 371,
                        'state_id' => 20,
                        'name' => 'Jalna',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    371 =>
                    array (
                        'id' => 372,
                        'state_id' => 20,
                        'name' => 'Kolhapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    372 =>
                    array (
                        'id' => 373,
                        'state_id' => 20,
                        'name' => 'Latur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    373 =>
                    array (
                        'id' => 374,
                        'state_id' => 20,
                        'name' => 'Mumbai City',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    374 =>
                    array (
                        'id' => 375,
                        'state_id' => 20,
                        'name' => 'Mumbai suburban',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    375 =>
                    array (
                        'id' => 376,
                        'state_id' => 20,
                        'name' => 'Nanded',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    376 =>
                    array (
                        'id' => 377,
                        'state_id' => 20,
                        'name' => 'Nandurbar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    377 =>
                    array (
                        'id' => 378,
                        'state_id' => 20,
                        'name' => 'Nagpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    378 =>
                    array (
                        'id' => 379,
                        'state_id' => 20,
                        'name' => 'Nashik',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    379 =>
                    array (
                        'id' => 380,
                        'state_id' => 20,
                        'name' => 'Osmanabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    380 =>
                    array (
                        'id' => 381,
                        'state_id' => 20,
                        'name' => 'Palghar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    381 =>
                    array (
                        'id' => 382,
                        'state_id' => 20,
                        'name' => 'Parbhani',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    382 =>
                    array (
                        'id' => 383,
                        'state_id' => 20,
                        'name' => 'Pune',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    383 =>
                    array (
                        'id' => 384,
                        'state_id' => 20,
                        'name' => 'Raigad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    384 =>
                    array (
                        'id' => 385,
                        'state_id' => 20,
                        'name' => 'Ratnagiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    385 =>
                    array (
                        'id' => 386,
                        'state_id' => 20,
                        'name' => 'Sangli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    386 =>
                    array (
                        'id' => 387,
                        'state_id' => 20,
                        'name' => 'Satara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    387 =>
                    array (
                        'id' => 388,
                        'state_id' => 20,
                        'name' => 'Sindhudurg',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    388 =>
                    array (
                        'id' => 389,
                        'state_id' => 20,
                        'name' => 'Solapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    389 =>
                    array (
                        'id' => 390,
                        'state_id' => 20,
                        'name' => 'Thane',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    390 =>
                    array (
                        'id' => 391,
                        'state_id' => 20,
                        'name' => 'Wardha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    391 =>
                    array (
                        'id' => 392,
                        'state_id' => 20,
                        'name' => 'Washim',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    392 =>
                    array (
                        'id' => 393,
                        'state_id' => 20,
                        'name' => 'Yavatmal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    393 =>
                    array (
                        'id' => 394,
                        'state_id' => 21,
                        'name' => 'Bishnupur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    394 =>
                    array (
                        'id' => 395,
                        'state_id' => 21,
                        'name' => 'Chandel',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    395 =>
                    array (
                        'id' => 396,
                        'state_id' => 21,
                        'name' => 'Churachandpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    396 =>
                    array (
                        'id' => 397,
                        'state_id' => 21,
                        'name' => 'Imphal East',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    397 =>
                    array (
                        'id' => 398,
                        'state_id' => 21,
                        'name' => 'Imphal West',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    398 =>
                    array (
                        'id' => 399,
                        'state_id' => 21,
                        'name' => 'Jiribam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    399 =>
                    array (
                        'id' => 400,
                        'state_id' => 21,
                        'name' => 'Kakching',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    400 =>
                    array (
                        'id' => 401,
                        'state_id' => 21,
                        'name' => 'Kamjong',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    401 =>
                    array (
                        'id' => 402,
                        'state_id' => 21,
                        'name' => 'Kangpokpi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    402 =>
                    array (
                        'id' => 403,
                        'state_id' => 21,
                        'name' => 'Noney',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    403 =>
                    array (
                        'id' => 404,
                        'state_id' => 21,
                        'name' => 'Pherzawl',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    404 =>
                    array (
                        'id' => 405,
                        'state_id' => 21,
                        'name' => 'Senapati',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    405 =>
                    array (
                        'id' => 406,
                        'state_id' => 21,
                        'name' => 'Tamenglong',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    406 =>
                    array (
                        'id' => 407,
                        'state_id' => 21,
                        'name' => 'Tengnoupal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    407 =>
                    array (
                        'id' => 408,
                        'state_id' => 21,
                        'name' => 'Thoubal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    408 =>
                    array (
                        'id' => 409,
                        'state_id' => 21,
                        'name' => 'Ukhrul',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    409 =>
                    array (
                        'id' => 410,
                        'state_id' => 22,
                        'name' => 'East Garo Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    410 =>
                    array (
                        'id' => 411,
                        'state_id' => 22,
                        'name' => 'East Khasi Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    411 =>
                    array (
                        'id' => 412,
                        'state_id' => 22,
                        'name' => 'East Jaintia Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    412 =>
                    array (
                        'id' => 413,
                        'state_id' => 22,
                        'name' => 'North Garo Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    413 =>
                    array (
                        'id' => 414,
                        'state_id' => 22,
                        'name' => 'Ri Bhoi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    414 =>
                    array (
                        'id' => 415,
                        'state_id' => 22,
                        'name' => 'South Garo Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    415 =>
                    array (
                        'id' => 416,
                        'state_id' => 22,
                        'name' => 'South West Garo Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    416 =>
                    array (
                        'id' => 417,
                        'state_id' => 22,
                        'name' => 'South West Khasi Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    417 =>
                    array (
                        'id' => 418,
                        'state_id' => 22,
                        'name' => 'West Jaintia Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    418 =>
                    array (
                        'id' => 419,
                        'state_id' => 22,
                        'name' => 'West Garo Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    419 =>
                    array (
                        'id' => 420,
                        'state_id' => 22,
                        'name' => 'West Khasi Hills',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    420 =>
                    array (
                        'id' => 421,
                        'state_id' => 23,
                        'name' => 'Aizawl',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    421 =>
                    array (
                        'id' => 422,
                        'state_id' => 23,
                        'name' => 'Champhai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    422 =>
                    array (
                        'id' => 423,
                        'state_id' => 23,
                        'name' => 'Hnahthial',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    423 =>
                    array (
                        'id' => 424,
                        'state_id' => 23,
                        'name' => 'Khawzawl',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    424 =>
                    array (
                        'id' => 425,
                        'state_id' => 23,
                        'name' => 'Kolasib',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    425 =>
                    array (
                        'id' => 426,
                        'state_id' => 23,
                        'name' => 'Lawngtlai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    426 =>
                    array (
                        'id' => 427,
                        'state_id' => 23,
                        'name' => 'Lunglei',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    427 =>
                    array (
                        'id' => 428,
                        'state_id' => 23,
                        'name' => 'Mamit',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    428 =>
                    array (
                        'id' => 429,
                        'state_id' => 23,
                        'name' => 'Saiha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    429 =>
                    array (
                        'id' => 430,
                        'state_id' => 23,
                        'name' => 'Saitual',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    430 =>
                    array (
                        'id' => 431,
                        'state_id' => 23,
                        'name' => 'Serchhip',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    431 =>
                    array (
                        'id' => 432,
                        'state_id' => 24,
                        'name' => 'Dimapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    432 =>
                    array (
                        'id' => 433,
                        'state_id' => 24,
                        'name' => 'Kiphire',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    433 =>
                    array (
                        'id' => 434,
                        'state_id' => 24,
                        'name' => 'Kohima',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    434 =>
                    array (
                        'id' => 435,
                        'state_id' => 24,
                        'name' => 'Longleng',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    435 =>
                    array (
                        'id' => 436,
                        'state_id' => 24,
                        'name' => 'Mokokchung',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    436 =>
                    array (
                        'id' => 437,
                        'state_id' => 24,
                        'name' => 'Mon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    437 =>
                    array (
                        'id' => 438,
                        'state_id' => 24,
                        'name' => 'Noklak',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    438 =>
                    array (
                        'id' => 439,
                        'state_id' => 24,
                        'name' => 'Peren',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    439 =>
                    array (
                        'id' => 440,
                        'state_id' => 24,
                        'name' => 'Phek',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    440 =>
                    array (
                        'id' => 441,
                        'state_id' => 24,
                        'name' => 'Tuensang',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    441 =>
                    array (
                        'id' => 442,
                        'state_id' => 24,
                        'name' => 'Wokha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    442 =>
                    array (
                        'id' => 443,
                        'state_id' => 24,
                        'name' => 'Zunheboto',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    443 =>
                    array (
                        'id' => 444,
                        'state_id' => 25,
                        'name' => 'Angul',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    444 =>
                    array (
                        'id' => 445,
                        'state_id' => 25,
                    'name' => 'Boudh (Bauda)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    445 =>
                    array (
                        'id' => 446,
                        'state_id' => 25,
                        'name' => 'Bhadrak',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    446 =>
                    array (
                        'id' => 447,
                        'state_id' => 25,
                        'name' => 'Balangir',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    447 =>
                    array (
                        'id' => 448,
                        'state_id' => 25,
                    'name' => 'Bargarh (Baragarh)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    448 =>
                    array (
                        'id' => 449,
                        'state_id' => 25,
                        'name' => 'Balasore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    449 =>
                    array (
                        'id' => 450,
                        'state_id' => 25,
                        'name' => 'Cuttack',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    450 =>
                    array (
                        'id' => 451,
                        'state_id' => 25,
                    'name' => 'Debagarh (Deogarh)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    451 =>
                    array (
                        'id' => 452,
                        'state_id' => 25,
                        'name' => 'Dhenkanal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    452 =>
                    array (
                        'id' => 453,
                        'state_id' => 25,
                        'name' => 'Ganjam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    453 =>
                    array (
                        'id' => 454,
                        'state_id' => 25,
                        'name' => 'Gajapati',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    454 =>
                    array (
                        'id' => 455,
                        'state_id' => 25,
                        'name' => 'Jharsuguda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    455 =>
                    array (
                        'id' => 456,
                        'state_id' => 25,
                        'name' => 'Jajpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    456 =>
                    array (
                        'id' => 457,
                        'state_id' => 25,
                        'name' => 'Jagatsinghpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    457 =>
                    array (
                        'id' => 458,
                        'state_id' => 25,
                        'name' => 'Khordha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    458 =>
                    array (
                        'id' => 459,
                        'state_id' => 25,
                    'name' => 'Kendujhar (Keonjhar)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    459 =>
                    array (
                        'id' => 460,
                        'state_id' => 25,
                        'name' => 'Kalahandi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    460 =>
                    array (
                        'id' => 461,
                        'state_id' => 25,
                        'name' => 'Kandhamal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    461 =>
                    array (
                        'id' => 462,
                        'state_id' => 25,
                        'name' => 'Koraput',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    462 =>
                    array (
                        'id' => 463,
                        'state_id' => 25,
                        'name' => 'Kendrapara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    463 =>
                    array (
                        'id' => 464,
                        'state_id' => 25,
                        'name' => 'Malkangiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    464 =>
                    array (
                        'id' => 465,
                        'state_id' => 25,
                        'name' => 'Mayurbhanj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    465 =>
                    array (
                        'id' => 466,
                        'state_id' => 25,
                        'name' => 'Nabarangpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    466 =>
                    array (
                        'id' => 467,
                        'state_id' => 25,
                        'name' => 'Nuapada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    467 =>
                    array (
                        'id' => 468,
                        'state_id' => 25,
                        'name' => 'Nayagarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    468 =>
                    array (
                        'id' => 469,
                        'state_id' => 25,
                        'name' => 'Puri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    469 =>
                    array (
                        'id' => 470,
                        'state_id' => 25,
                        'name' => 'Rayagada',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    470 =>
                    array (
                        'id' => 471,
                        'state_id' => 25,
                        'name' => 'Sambalpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    471 =>
                    array (
                        'id' => 472,
                        'state_id' => 25,
                    'name' => 'Subarnapur (Sonepur)',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    472 =>
                    array (
                        'id' => 473,
                        'state_id' => 25,
                        'name' => 'Sundargarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    473 =>
                    array (
                        'id' => 474,
                        'state_id' => 26,
                        'name' => 'Karaikal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    474 =>
                    array (
                        'id' => 475,
                        'state_id' => 26,
                        'name' => 'Mah ',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    475 =>
                    array (
                        'id' => 476,
                        'state_id' => 26,
                        'name' => 'Pondicherry',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    476 =>
                    array (
                        'id' => 477,
                        'state_id' => 26,
                        'name' => 'Yanam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    477 =>
                    array (
                        'id' => 478,
                        'state_id' => 27,
                        'name' => 'Amritsar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    478 =>
                    array (
                        'id' => 479,
                        'state_id' => 27,
                        'name' => 'Barnala',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    479 =>
                    array (
                        'id' => 480,
                        'state_id' => 27,
                        'name' => 'Bathinda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    480 =>
                    array (
                        'id' => 481,
                        'state_id' => 27,
                        'name' => 'Firozpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    481 =>
                    array (
                        'id' => 482,
                        'state_id' => 27,
                        'name' => 'Faridkot',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    482 =>
                    array (
                        'id' => 483,
                        'state_id' => 27,
                        'name' => 'Fatehgarh Sahib',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    483 =>
                    array (
                        'id' => 484,
                        'state_id' => 27,
                        'name' => 'Fazilka[14]',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    484 =>
                    array (
                        'id' => 485,
                        'state_id' => 27,
                        'name' => 'Gurdaspur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    485 =>
                    array (
                        'id' => 486,
                        'state_id' => 27,
                        'name' => 'Hoshiarpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    486 =>
                    array (
                        'id' => 487,
                        'state_id' => 27,
                        'name' => 'Jalandhar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    487 =>
                    array (
                        'id' => 488,
                        'state_id' => 27,
                        'name' => 'Kapurthala',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    488 =>
                    array (
                        'id' => 489,
                        'state_id' => 27,
                        'name' => 'Ludhiana',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    489 =>
                    array (
                        'id' => 490,
                        'state_id' => 27,
                        'name' => 'Mansa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    490 =>
                    array (
                        'id' => 491,
                        'state_id' => 27,
                        'name' => 'Moga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    491 =>
                    array (
                        'id' => 492,
                        'state_id' => 27,
                        'name' => 'Sri Muktsar Sahib',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    492 =>
                    array (
                        'id' => 493,
                        'state_id' => 27,
                        'name' => 'Pathankot',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    493 =>
                    array (
                        'id' => 494,
                        'state_id' => 27,
                        'name' => 'Patiala',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    494 =>
                    array (
                        'id' => 495,
                        'state_id' => 27,
                        'name' => 'Rupnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    495 =>
                    array (
                        'id' => 496,
                        'state_id' => 27,
                        'name' => 'Sahibzada Ajit Singh Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    496 =>
                    array (
                        'id' => 497,
                        'state_id' => 27,
                        'name' => 'Sangrur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    497 =>
                    array (
                        'id' => 498,
                        'state_id' => 27,
                        'name' => 'Shahid Bhagat Singh Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    498 =>
                    array (
                        'id' => 499,
                        'state_id' => 27,
                        'name' => 'Tarn Taran',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    499 =>
                    array (
                        'id' => 500,
                        'state_id' => 28,
                        'name' => 'Ajmer',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                ));
                DB::table('districts')->insert(array (
                    0 =>
                    array (
                        'id' => 501,
                        'state_id' => 28,
                        'name' => 'Alwar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    1 =>
                    array (
                        'id' => 502,
                        'state_id' => 28,
                        'name' => 'Bikaner',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    2 =>
                    array (
                        'id' => 503,
                        'state_id' => 28,
                        'name' => 'Barmer',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    3 =>
                    array (
                        'id' => 504,
                        'state_id' => 28,
                        'name' => 'Banswara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    4 =>
                    array (
                        'id' => 505,
                        'state_id' => 28,
                        'name' => 'Bharatpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    5 =>
                    array (
                        'id' => 506,
                        'state_id' => 28,
                        'name' => 'Baran',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    6 =>
                    array (
                        'id' => 507,
                        'state_id' => 28,
                        'name' => 'Bundi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    7 =>
                    array (
                        'id' => 508,
                        'state_id' => 28,
                        'name' => 'Bhilwara',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    8 =>
                    array (
                        'id' => 509,
                        'state_id' => 28,
                        'name' => 'Churu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    9 =>
                    array (
                        'id' => 510,
                        'state_id' => 28,
                        'name' => 'Chittorgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    10 =>
                    array (
                        'id' => 511,
                        'state_id' => 28,
                        'name' => 'Dausa',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    11 =>
                    array (
                        'id' => 512,
                        'state_id' => 28,
                        'name' => 'Dholpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    12 =>
                    array (
                        'id' => 513,
                        'state_id' => 28,
                        'name' => 'Dungarpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    13 =>
                    array (
                        'id' => 514,
                        'state_id' => 28,
                        'name' => 'Ganganagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    14 =>
                    array (
                        'id' => 515,
                        'state_id' => 28,
                        'name' => 'Hanumangarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    15 =>
                    array (
                        'id' => 516,
                        'state_id' => 28,
                        'name' => 'Jhunjhunu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    16 =>
                    array (
                        'id' => 517,
                        'state_id' => 28,
                        'name' => 'Jalore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    17 =>
                    array (
                        'id' => 518,
                        'state_id' => 28,
                        'name' => 'Jodhpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    18 =>
                    array (
                        'id' => 519,
                        'state_id' => 28,
                        'name' => 'Jaipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    19 =>
                    array (
                        'id' => 520,
                        'state_id' => 28,
                        'name' => 'Jaisalmer',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    20 =>
                    array (
                        'id' => 521,
                        'state_id' => 28,
                        'name' => 'Jhalawar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    21 =>
                    array (
                        'id' => 522,
                        'state_id' => 28,
                        'name' => 'Karauli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    22 =>
                    array (
                        'id' => 523,
                        'state_id' => 28,
                        'name' => 'Kota',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    23 =>
                    array (
                        'id' => 524,
                        'state_id' => 28,
                        'name' => 'Nagaur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    24 =>
                    array (
                        'id' => 525,
                        'state_id' => 28,
                        'name' => 'Pali',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    25 =>
                    array (
                        'id' => 526,
                        'state_id' => 28,
                        'name' => 'Pratapgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    26 =>
                    array (
                        'id' => 527,
                        'state_id' => 28,
                        'name' => 'Rajsamand',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    27 =>
                    array (
                        'id' => 528,
                        'state_id' => 28,
                        'name' => 'Sikar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    28 =>
                    array (
                        'id' => 529,
                        'state_id' => 28,
                        'name' => 'Sawai Madhopur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    29 =>
                    array (
                        'id' => 530,
                        'state_id' => 28,
                        'name' => 'Sirohi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    30 =>
                    array (
                        'id' => 531,
                        'state_id' => 28,
                        'name' => 'Tonk',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    31 =>
                    array (
                        'id' => 532,
                        'state_id' => 28,
                        'name' => 'Udaipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    32 =>
                    array (
                        'id' => 533,
                        'state_id' => 29,
                        'name' => 'East Sikkim',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    33 =>
                    array (
                        'id' => 534,
                        'state_id' => 29,
                        'name' => 'North Sikkim',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    34 =>
                    array (
                        'id' => 535,
                        'state_id' => 29,
                        'name' => 'South Sikkim',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    35 =>
                    array (
                        'id' => 536,
                        'state_id' => 29,
                        'name' => 'West Sikkim',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    36 =>
                    array (
                        'id' => 537,
                        'state_id' => 30,
                        'name' => 'Ariyalur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    37 =>
                    array (
                        'id' => 538,
                        'state_id' => 30,
                        'name' => 'Chengalpattu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    38 =>
                    array (
                        'id' => 539,
                        'state_id' => 30,
                        'name' => 'Chennai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    39 =>
                    array (
                        'id' => 540,
                        'state_id' => 30,
                        'name' => 'Coimbatore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    40 =>
                    array (
                        'id' => 541,
                        'state_id' => 30,
                        'name' => 'Cuddalore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    41 =>
                    array (
                        'id' => 542,
                        'state_id' => 30,
                        'name' => 'Dharmapuri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    42 =>
                    array (
                        'id' => 543,
                        'state_id' => 30,
                        'name' => 'Dindigul',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    43 =>
                    array (
                        'id' => 544,
                        'state_id' => 30,
                        'name' => 'Erode',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    44 =>
                    array (
                        'id' => 545,
                        'state_id' => 30,
                        'name' => 'Kallakurichi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    45 =>
                    array (
                        'id' => 546,
                        'state_id' => 30,
                        'name' => 'Kanchipuram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    46 =>
                    array (
                        'id' => 547,
                        'state_id' => 30,
                        'name' => 'Kanyakumari',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    47 =>
                    array (
                        'id' => 548,
                        'state_id' => 30,
                        'name' => 'Karur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    48 =>
                    array (
                        'id' => 549,
                        'state_id' => 30,
                        'name' => 'Krishnagiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    49 =>
                    array (
                        'id' => 550,
                        'state_id' => 30,
                        'name' => 'Madurai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    50 =>
                    array (
                        'id' => 551,
                        'state_id' => 30,
                        'name' => 'Mayiladuthurai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    51 =>
                    array (
                        'id' => 552,
                        'state_id' => 30,
                        'name' => 'Nagapattinam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    52 =>
                    array (
                        'id' => 553,
                        'state_id' => 30,
                        'name' => 'Nilgiris',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    53 =>
                    array (
                        'id' => 554,
                        'state_id' => 30,
                        'name' => 'Namakkal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    54 =>
                    array (
                        'id' => 555,
                        'state_id' => 30,
                        'name' => 'Perambalur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    55 =>
                    array (
                        'id' => 556,
                        'state_id' => 30,
                        'name' => 'Pudukkottai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    56 =>
                    array (
                        'id' => 557,
                        'state_id' => 30,
                        'name' => 'Ramanathapuram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    57 =>
                    array (
                        'id' => 558,
                        'state_id' => 30,
                        'name' => 'Ranipet',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    58 =>
                    array (
                        'id' => 559,
                        'state_id' => 30,
                        'name' => 'Salem',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    59 =>
                    array (
                        'id' => 560,
                        'state_id' => 30,
                        'name' => 'Sivaganga',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    60 =>
                    array (
                        'id' => 561,
                        'state_id' => 30,
                        'name' => 'Tenkasi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    61 =>
                    array (
                        'id' => 562,
                        'state_id' => 30,
                        'name' => 'Tirupur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    62 =>
                    array (
                        'id' => 563,
                        'state_id' => 30,
                        'name' => 'Tiruchirappalli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    63 =>
                    array (
                        'id' => 564,
                        'state_id' => 30,
                        'name' => 'Theni',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    64 =>
                    array (
                        'id' => 565,
                        'state_id' => 30,
                        'name' => 'Tirunelveli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    65 =>
                    array (
                        'id' => 566,
                        'state_id' => 30,
                        'name' => 'Thanjavur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    66 =>
                    array (
                        'id' => 567,
                        'state_id' => 30,
                        'name' => 'Thoothukudi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    67 =>
                    array (
                        'id' => 568,
                        'state_id' => 30,
                        'name' => 'Tirupattur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    68 =>
                    array (
                        'id' => 569,
                        'state_id' => 30,
                        'name' => 'Tiruvallur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    69 =>
                    array (
                        'id' => 570,
                        'state_id' => 30,
                        'name' => 'Tiruvarur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    70 =>
                    array (
                        'id' => 571,
                        'state_id' => 30,
                        'name' => 'Tiruvannamalai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    71 =>
                    array (
                        'id' => 572,
                        'state_id' => 30,
                        'name' => 'Vellore',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    72 =>
                    array (
                        'id' => 573,
                        'state_id' => 30,
                        'name' => 'Viluppuram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    73 =>
                    array (
                        'id' => 574,
                        'state_id' => 30,
                        'name' => 'Virudhunagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    74 =>
                    array (
                        'id' => 575,
                        'state_id' => 31,
                        'name' => 'Adilabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    75 =>
                    array (
                        'id' => 576,
                        'state_id' => 31,
                        'name' => 'Komaram Bheem',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    76 =>
                    array (
                        'id' => 577,
                        'state_id' => 31,
                        'name' => 'Bhadradri Kothagudem',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    77 =>
                    array (
                        'id' => 578,
                        'state_id' => 31,
                        'name' => 'Hyderabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    78 =>
                    array (
                        'id' => 579,
                        'state_id' => 31,
                        'name' => 'Jagtial',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    79 =>
                    array (
                        'id' => 580,
                        'state_id' => 31,
                        'name' => 'Jangaon',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    80 =>
                    array (
                        'id' => 581,
                        'state_id' => 31,
                        'name' => 'Jayashankar Bhupalpally',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    81 =>
                    array (
                        'id' => 582,
                        'state_id' => 31,
                        'name' => 'Jogulamba Gadwal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    82 =>
                    array (
                        'id' => 583,
                        'state_id' => 31,
                        'name' => 'Kamareddy',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    83 =>
                    array (
                        'id' => 584,
                        'state_id' => 31,
                        'name' => 'Karimnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    84 =>
                    array (
                        'id' => 585,
                        'state_id' => 31,
                        'name' => 'Khammam',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    85 =>
                    array (
                        'id' => 586,
                        'state_id' => 31,
                        'name' => 'Mahabubabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    86 =>
                    array (
                        'id' => 587,
                        'state_id' => 31,
                        'name' => 'Mahbubnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    87 =>
                    array (
                        'id' => 588,
                        'state_id' => 31,
                        'name' => 'Mancherial',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    88 =>
                    array (
                        'id' => 589,
                        'state_id' => 31,
                        'name' => 'Medak',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    89 =>
                    array (
                        'id' => 590,
                        'state_id' => 31,
                        'name' => 'Medchal-Malkajgiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    90 =>
                    array (
                        'id' => 591,
                        'state_id' => 31,
                        'name' => 'Mulugu',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    91 =>
                    array (
                        'id' => 592,
                        'state_id' => 31,
                        'name' => 'Nalgonda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    92 =>
                    array (
                        'id' => 593,
                        'state_id' => 31,
                        'name' => 'Narayanpet',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    93 =>
                    array (
                        'id' => 594,
                        'state_id' => 31,
                        'name' => 'Nagarkurnool',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    94 =>
                    array (
                        'id' => 595,
                        'state_id' => 31,
                        'name' => 'Nirmal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    95 =>
                    array (
                        'id' => 596,
                        'state_id' => 31,
                        'name' => 'Nizamabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    96 =>
                    array (
                        'id' => 597,
                        'state_id' => 31,
                        'name' => 'Peddapalli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    97 =>
                    array (
                        'id' => 598,
                        'state_id' => 31,
                        'name' => 'Rajanna Sircilla',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    98 =>
                    array (
                        'id' => 599,
                        'state_id' => 31,
                        'name' => 'Ranga Reddy',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    99 =>
                    array (
                        'id' => 600,
                        'state_id' => 31,
                        'name' => 'Sangareddy',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    100 =>
                    array (
                        'id' => 601,
                        'state_id' => 31,
                        'name' => 'Siddipet',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    101 =>
                    array (
                        'id' => 602,
                        'state_id' => 31,
                        'name' => 'Suryapet',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    102 =>
                    array (
                        'id' => 603,
                        'state_id' => 31,
                        'name' => 'Vikarabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    103 =>
                    array (
                        'id' => 604,
                        'state_id' => 31,
                        'name' => 'Wanaparthy',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    104 =>
                    array (
                        'id' => 605,
                        'state_id' => 31,
                        'name' => 'Warangal Urban',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    105 =>
                    array (
                        'id' => 606,
                        'state_id' => 31,
                        'name' => 'Warangal Rural',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    106 =>
                    array (
                        'id' => 607,
                        'state_id' => 31,
                        'name' => 'Yadadri Bhuvanagiri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    107 =>
                    array (
                        'id' => 608,
                        'state_id' => 32,
                        'name' => 'Dhalai',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    108 =>
                    array (
                        'id' => 609,
                        'state_id' => 32,
                        'name' => 'Gomati',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    109 =>
                    array (
                        'id' => 610,
                        'state_id' => 32,
                        'name' => 'Khowai[15]',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    110 =>
                    array (
                        'id' => 611,
                        'state_id' => 32,
                        'name' => 'North Tripura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    111 =>
                    array (
                        'id' => 612,
                        'state_id' => 32,
                        'name' => 'Sepahijala[16]',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    112 =>
                    array (
                        'id' => 613,
                        'state_id' => 32,
                        'name' => 'South Tripura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    113 =>
                    array (
                        'id' => 614,
                        'state_id' => 32,
                        'name' => 'Unokoti[17]',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    114 =>
                    array (
                        'id' => 615,
                        'state_id' => 32,
                        'name' => 'West Tripura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    115 =>
                    array (
                        'id' => 616,
                        'state_id' => 33,
                        'name' => 'Agra',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    116 =>
                    array (
                        'id' => 617,
                        'state_id' => 33,
                        'name' => 'Aligarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    117 =>
                    array (
                        'id' => 618,
                        'state_id' => 33,
                        'name' => 'Prayagraj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    118 =>
                    array (
                        'id' => 619,
                        'state_id' => 33,
                        'name' => 'Ambedkar Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    119 =>
                    array (
                        'id' => 620,
                        'state_id' => 33,
                        'name' => 'Amethi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    120 =>
                    array (
                        'id' => 621,
                        'state_id' => 33,
                        'name' => 'Amroha',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    121 =>
                    array (
                        'id' => 622,
                        'state_id' => 33,
                        'name' => 'Auraiya',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    122 =>
                    array (
                        'id' => 623,
                        'state_id' => 33,
                        'name' => 'Azamgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    123 =>
                    array (
                        'id' => 624,
                        'state_id' => 33,
                        'name' => 'Bagpat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    124 =>
                    array (
                        'id' => 625,
                        'state_id' => 33,
                        'name' => 'Bahraich',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    125 =>
                    array (
                        'id' => 626,
                        'state_id' => 33,
                        'name' => 'Ballia',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    126 =>
                    array (
                        'id' => 627,
                        'state_id' => 33,
                        'name' => 'Balrampur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    127 =>
                    array (
                        'id' => 628,
                        'state_id' => 33,
                        'name' => 'Banda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    128 =>
                    array (
                        'id' => 629,
                        'state_id' => 33,
                        'name' => 'Barabanki',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    129 =>
                    array (
                        'id' => 630,
                        'state_id' => 33,
                        'name' => 'Bareilly',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    130 =>
                    array (
                        'id' => 631,
                        'state_id' => 33,
                        'name' => 'Basti',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    131 =>
                    array (
                        'id' => 632,
                        'state_id' => 33,
                        'name' => 'Bhadohi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    132 =>
                    array (
                        'id' => 633,
                        'state_id' => 33,
                        'name' => 'Bijnor',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    133 =>
                    array (
                        'id' => 634,
                        'state_id' => 33,
                        'name' => 'Budaun',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    134 =>
                    array (
                        'id' => 635,
                        'state_id' => 33,
                        'name' => 'Bulandshahr',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    135 =>
                    array (
                        'id' => 636,
                        'state_id' => 33,
                        'name' => 'Chandauli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    136 =>
                    array (
                        'id' => 637,
                        'state_id' => 33,
                        'name' => 'Chitrakoot',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    137 =>
                    array (
                        'id' => 638,
                        'state_id' => 33,
                        'name' => 'Deoria',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    138 =>
                    array (
                        'id' => 639,
                        'state_id' => 33,
                        'name' => 'Etah',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    139 =>
                    array (
                        'id' => 640,
                        'state_id' => 33,
                        'name' => 'Etawah',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    140 =>
                    array (
                        'id' => 641,
                        'state_id' => 33,
                        'name' => 'Ayodhya',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    141 =>
                    array (
                        'id' => 642,
                        'state_id' => 33,
                        'name' => 'Farrukhabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    142 =>
                    array (
                        'id' => 643,
                        'state_id' => 33,
                        'name' => 'Fatehpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    143 =>
                    array (
                        'id' => 644,
                        'state_id' => 33,
                        'name' => 'Firozabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    144 =>
                    array (
                        'id' => 645,
                        'state_id' => 33,
                        'name' => 'Gautam Buddh Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    145 =>
                    array (
                        'id' => 646,
                        'state_id' => 33,
                        'name' => 'Ghaziabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    146 =>
                    array (
                        'id' => 647,
                        'state_id' => 33,
                        'name' => 'Ghazipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    147 =>
                    array (
                        'id' => 648,
                        'state_id' => 33,
                        'name' => 'Gonda',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    148 =>
                    array (
                        'id' => 649,
                        'state_id' => 33,
                        'name' => 'Gorakhpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    149 =>
                    array (
                        'id' => 650,
                        'state_id' => 33,
                        'name' => 'Hamirpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    150 =>
                    array (
                        'id' => 651,
                        'state_id' => 33,
                        'name' => 'Hapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    151 =>
                    array (
                        'id' => 652,
                        'state_id' => 33,
                        'name' => 'Hardoi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    152 =>
                    array (
                        'id' => 653,
                        'state_id' => 33,
                        'name' => 'Hathras',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    153 =>
                    array (
                        'id' => 654,
                        'state_id' => 33,
                        'name' => 'Jalaun',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    154 =>
                    array (
                        'id' => 655,
                        'state_id' => 33,
                        'name' => 'Jaunpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    155 =>
                    array (
                        'id' => 656,
                        'state_id' => 33,
                        'name' => 'Jhansi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    156 =>
                    array (
                        'id' => 657,
                        'state_id' => 33,
                        'name' => 'Kannauj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    157 =>
                    array (
                        'id' => 658,
                        'state_id' => 33,
                        'name' => 'Kanpur Dehat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    158 =>
                    array (
                        'id' => 659,
                        'state_id' => 33,
                        'name' => 'Kanpur Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    159 =>
                    array (
                        'id' => 660,
                        'state_id' => 33,
                        'name' => 'Kasganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    160 =>
                    array (
                        'id' => 661,
                        'state_id' => 33,
                        'name' => 'Kaushambi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    161 =>
                    array (
                        'id' => 662,
                        'state_id' => 33,
                        'name' => 'Kushinagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    162 =>
                    array (
                        'id' => 663,
                        'state_id' => 33,
                        'name' => 'Lakhimpur Kheri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    163 =>
                    array (
                        'id' => 664,
                        'state_id' => 33,
                        'name' => 'Lalitpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    164 =>
                    array (
                        'id' => 665,
                        'state_id' => 33,
                        'name' => 'Lucknow',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    165 =>
                    array (
                        'id' => 666,
                        'state_id' => 33,
                        'name' => 'Maharajganj',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    166 =>
                    array (
                        'id' => 667,
                        'state_id' => 33,
                        'name' => 'Mahoba',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    167 =>
                    array (
                        'id' => 668,
                        'state_id' => 33,
                        'name' => 'Mainpuri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    168 =>
                    array (
                        'id' => 669,
                        'state_id' => 33,
                        'name' => 'Mathura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    169 =>
                    array (
                        'id' => 670,
                        'state_id' => 33,
                        'name' => 'Mau',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    170 =>
                    array (
                        'id' => 671,
                        'state_id' => 33,
                        'name' => 'Meerut',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    171 =>
                    array (
                        'id' => 672,
                        'state_id' => 33,
                        'name' => 'Mirzapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    172 =>
                    array (
                        'id' => 673,
                        'state_id' => 33,
                        'name' => 'Moradabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    173 =>
                    array (
                        'id' => 674,
                        'state_id' => 33,
                        'name' => 'Muzaffarnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    174 =>
                    array (
                        'id' => 675,
                        'state_id' => 33,
                        'name' => 'Pilibhit',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    175 =>
                    array (
                        'id' => 676,
                        'state_id' => 33,
                        'name' => 'Pratapgarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    176 =>
                    array (
                        'id' => 677,
                        'state_id' => 33,
                        'name' => 'Raebareli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    177 =>
                    array (
                        'id' => 678,
                        'state_id' => 33,
                        'name' => 'Rampur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    178 =>
                    array (
                        'id' => 679,
                        'state_id' => 33,
                        'name' => 'Saharanpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    179 =>
                    array (
                        'id' => 680,
                        'state_id' => 33,
                        'name' => 'Sambhal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    180 =>
                    array (
                        'id' => 681,
                        'state_id' => 33,
                        'name' => 'Sant Kabir Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    181 =>
                    array (
                        'id' => 682,
                        'state_id' => 33,
                        'name' => 'Shahjahanpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    182 =>
                    array (
                        'id' => 683,
                        'state_id' => 33,
                        'name' => 'Shamli[18]',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    183 =>
                    array (
                        'id' => 684,
                        'state_id' => 33,
                        'name' => 'Shravasti',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    184 =>
                    array (
                        'id' => 685,
                        'state_id' => 33,
                        'name' => 'Siddharthnagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    185 =>
                    array (
                        'id' => 686,
                        'state_id' => 33,
                        'name' => 'Sitapur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    186 =>
                    array (
                        'id' => 687,
                        'state_id' => 33,
                        'name' => 'Sonbhadra',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    187 =>
                    array (
                        'id' => 688,
                        'state_id' => 33,
                        'name' => 'Sultanpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    188 =>
                    array (
                        'id' => 689,
                        'state_id' => 33,
                        'name' => 'Unnao',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    189 =>
                    array (
                        'id' => 690,
                        'state_id' => 33,
                        'name' => 'Varanasi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    190 =>
                    array (
                        'id' => 691,
                        'state_id' => 34,
                        'name' => 'Almora',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    191 =>
                    array (
                        'id' => 692,
                        'state_id' => 34,
                        'name' => 'Bageshwar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    192 =>
                    array (
                        'id' => 693,
                        'state_id' => 34,
                        'name' => 'Chamoli',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    193 =>
                    array (
                        'id' => 694,
                        'state_id' => 34,
                        'name' => 'Champawat',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    194 =>
                    array (
                        'id' => 695,
                        'state_id' => 34,
                        'name' => 'Dehradun',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    195 =>
                    array (
                        'id' => 696,
                        'state_id' => 34,
                        'name' => 'Haridwar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    196 =>
                    array (
                        'id' => 697,
                        'state_id' => 34,
                        'name' => 'Nainital',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    197 =>
                    array (
                        'id' => 698,
                        'state_id' => 34,
                        'name' => 'Pauri Garhwal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    198 =>
                    array (
                        'id' => 699,
                        'state_id' => 34,
                        'name' => 'Pithoragarh',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    199 =>
                    array (
                        'id' => 700,
                        'state_id' => 34,
                        'name' => 'Rudraprayag',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    200 =>
                    array (
                        'id' => 701,
                        'state_id' => 34,
                        'name' => 'Tehri Garhwal',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    201 =>
                    array (
                        'id' => 702,
                        'state_id' => 34,
                        'name' => 'Udham Singh Nagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    202 =>
                    array (
                        'id' => 703,
                        'state_id' => 34,
                        'name' => 'Uttarkashi',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    203 =>
                    array (
                        'id' => 704,
                        'state_id' => 35,
                        'name' => 'Alipurduar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    204 =>
                    array (
                        'id' => 705,
                        'state_id' => 34,
                        'name' => 'Bankura',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    205 =>
                    array (
                        'id' => 706,
                        'state_id' => 34,
                        'name' => 'Paschim Bardhaman',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    206 =>
                    array (
                        'id' => 707,
                        'state_id' => 34,
                        'name' => 'Purba Bardhaman',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    207 =>
                    array (
                        'id' => 708,
                        'state_id' => 34,
                        'name' => 'Birbhum',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    208 =>
                    array (
                        'id' => 709,
                        'state_id' => 34,
                        'name' => 'Cooch Behar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    209 =>
                    array (
                        'id' => 710,
                        'state_id' => 34,
                        'name' => 'Dakshin Dinajpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    210 =>
                    array (
                        'id' => 711,
                        'state_id' => 34,
                        'name' => 'Darjeeling',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    211 =>
                    array (
                        'id' => 712,
                        'state_id' => 34,
                        'name' => 'Hooghly',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    212 =>
                    array (
                        'id' => 713,
                        'state_id' => 34,
                        'name' => 'Howrah',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    213 =>
                    array (
                        'id' => 714,
                        'state_id' => 34,
                        'name' => 'Jalpaiguri',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    214 =>
                    array (
                        'id' => 715,
                        'state_id' => 34,
                        'name' => 'Jhargram',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    215 =>
                    array (
                        'id' => 716,
                        'state_id' => 34,
                        'name' => 'Kalimpong',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    216 =>
                    array (
                        'id' => 717,
                        'state_id' => 34,
                        'name' => 'Kolkata',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    217 =>
                    array (
                        'id' => 718,
                        'state_id' => 34,
                        'name' => 'Maldah',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    218 =>
                    array (
                        'id' => 719,
                        'state_id' => 34,
                        'name' => 'Murshidabad',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    219 =>
                    array (
                        'id' => 720,
                        'state_id' => 34,
                        'name' => 'Nadia',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    220 =>
                    array (
                        'id' => 721,
                        'state_id' => 34,
                        'name' => 'North 24 Parganas',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    221 =>
                    array (
                        'id' => 722,
                        'state_id' => 34,
                        'name' => 'Paschim Medinipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    222 =>
                    array (
                        'id' => 723,
                        'state_id' => 34,
                        'name' => 'Purba Medinipur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    223 =>
                    array (
                        'id' => 724,
                        'state_id' => 34,
                        'name' => 'Purulia',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    224 =>
                    array (
                        'id' => 725,
                        'state_id' => 34,
                        'name' => 'South 24 Parganas',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    225 =>
                    array (
                        'id' => 726,
                        'state_id' => 34,
                        'name' => 'Uttar Dinajpur',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    226 =>
                    array (
                        'id' => 727,
                        'state_id' => 20,
                        'name' => 'Ahmednagar',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),
                    array (
                        'id' => 0,
                        'state_id' => 1,
                        'name' => 'Select City',
                        'status' => 'active',
                        'created_at' => '2020-06-23 06:03:33',
                        'updated_at' => '2020-06-23 06:03:33',
                    ),


                ));
            }
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

            if (config('load_taluka'))
            {

            }


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
