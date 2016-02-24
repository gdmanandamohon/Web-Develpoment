<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblHpMmAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hp_mm_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_uName');
            $table->string('admin_pass',60);
            $table->string('admin_level');
            $table->rememberToken();
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
        Schema::drop('tbl_hp_mm_admin');
    }
}
