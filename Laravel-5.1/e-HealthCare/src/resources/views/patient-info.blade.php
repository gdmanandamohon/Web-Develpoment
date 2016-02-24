<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 12-Aug-15
 * Time: 12:41 AM
 */ ?>

 @extends('app')

 @section('page-title')
 Know About Your Patient
 @stop

 @section('menu-bar')
             <li><a href="/" >Home</a></li>
             <li><a href="/services" >Services</a></li>
             <li><a href="/patient-info" class="current">News Of Patient</a></li>
             <li><a href="/admin">Admin</a></li>
             <li><a href="/contact-us" >Contact</a></li>
 @stop
 @section('page-content')
     <div id="templatemo_main"><span class="main_top"></span>
        <div id="content-viewer-div">
         <table>
         {!!  Form::open(array('action'=>'AppPageController@vf_pat_guardian'))  !!}
             <tr>
                 <td>
                     {!! Form::label('patient_id', 'Patient ID') !!}
                 </td>
                 <td>
                     {!! Form::text('patient_id', null, array('class' => 'field' )) !!}
                 </td>
             </tr>
             <tr>
                  <td>
                     {!! Form::label('p_room_no', 'Room No') !!}
                  </td>
                  <td>
                     {!! Form::text('allot_room_no', null, array('class' => 'field')) !!}
                  </td>
             </tr>
             <tr>
                 <td>
                    {!! Form::label('remember_token', 'Remember Me') !!}
                 </td>
                 <td>
                    {!! Form::checkbox('remember_token', null, array('class' => 'field')) !!}
                 </td>
             </tr>
             <tr>
                 <td>

                 </td>
                 <td>
                     {!! Form::Submit('View') !!}
                 </td>
             </tr>
             {!!  Form::close() !!}
         </table>
        </div>
     </div>

  @stop