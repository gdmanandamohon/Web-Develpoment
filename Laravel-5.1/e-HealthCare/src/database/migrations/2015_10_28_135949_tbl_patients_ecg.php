<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPatientsEcg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_patientsEcg', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('patient_ecg');
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
        Schema::drop('tbl_patientsEcg');
    }
}
