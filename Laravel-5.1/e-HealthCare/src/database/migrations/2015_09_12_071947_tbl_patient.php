<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPatient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('allot_room_no',10);
            $table->string('patient_id', 10);
            $table->string('patient_age',2);
            $table->string('p_guard_cnt',15);
            $table->string('p_guard_add');
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
        //
        Schema::drop('tbl_patient');
    }
}
