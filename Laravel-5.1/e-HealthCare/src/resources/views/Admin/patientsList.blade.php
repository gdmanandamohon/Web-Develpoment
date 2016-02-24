<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 09-Oct-15
 * Time: 9:23 PM
 */ ?>
@extends('...app')

   @section('page-title')
   Welcome|{{$admin_name}}
   @stop
   @section('menu-bar')
                   <li><a href="/admin/index">Home</a></li>
                   <li><a href="/admin/Patients-List" class="current">Patients List</a></li>
                   <li><a href="/admin/New-Patient">New Patient</a></li>
                   <li><a href="#">Others</a></li>
                   <li><a href="/admin/logout">logout</a></li>
   @stop

   @section('page-content')
        <div id="templatemo_main"><span class="main_top"></span>
                <p><h4>list of all Patients</h4></p>

                @foreach($listOfAllPatients as $singleist)
                           <div style='width:100%; border: 1px solid springgreen; margin-bottom:2px; padding: 3px;'>
                                <h6>Patient Id :{!! Html::linkAction('AppPageController@details_patient', $singleist['patient_id'], array($singleist['patient_id'])) !!}</h6>
                                <h6>patient Alloted Room no :{{ $singleist['allot_room_no']}}</h6>
                                <h6>patient Name :{{ $singleist['name']}}</h6>
                                <h6>Allotment Date :{{ $singleist['created_at']}}</h6>

                           </div>

                @endforeach
        </div>
   @stop