<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientTableAccess extends Model
{
    //
    protected  $table ='tbl_patient';
    protected $fillable =['patient_id','name', 'allot_room_no','patient_age','p_guard_cnt'];
}
