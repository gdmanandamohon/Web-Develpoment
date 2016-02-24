<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPatientsMultipleMm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_patients_MultipleMm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('patient_r_temp');
            $table->string('patient_body_temp');
            $table->string('patient_r_humidity');
            $table->string('patient_r_light');
            $table->string('patient_r_position');
            $table->timestamp('created_at');
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
        Schema::drop('tbl_patients_MultipleMm');
    }
}
