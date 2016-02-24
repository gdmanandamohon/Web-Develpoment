<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 09-Oct-15
 * Time: 9:29 PM
 */
 $random = rand();
 ?>
@extends('...app')

   @section('page-title')
   Welcome|{{$admin_name}}
   @stop
   @section('menu-bar')
                   <li><a href="/admin/index">Home</a></li>
                   <li><a href="/admin/Patients-List">Patients List</a></li>
                   <li><a href="/admin/New-Patient" class="current">New Patient</a></li>
                   <li><a href="#">Others</a></li>
                   <li><a href="/admin/logout">logout</a></li>
   @stop

   @section('page-content')
        <div id="templatemo_main"><span class="main_top"></span>


            <table>
                    {!!  Form::open(array('action'=>'AppPageController@insert_new_patient_post'))  !!}
                        <tr>
                            <td>
                                {!! Form::label('patient_id', 'Patient ID') !!}
                            </td>
                            <td>
                                <input type='text'  name="patient_id" id="patient_id"/>
                            </td>
                            <td>
                                <input type="button" onclick='getRandomString(6)' onkeypress='' value="Generate">
                            </td>
                        </tr>
                        <tr>
                             <td>
                                {!! Form::label('allot_room_no', 'Allotted Room No: ') !!}
                             </td>
                             <td>
                                <input type="text" name="allot_room_no">
                             </td>
                        </tr>
                        <tr>
                             <td>
                                {!! Form::label('name', 'Patient Name: ') !!}
                             </td>
                             <td>
                                <input type="text" name="name">
                             </td>
                        </tr>
                        <tr>
                            <td>
                               {!! Form::label('patient_age', 'Patient Age') !!}
                            </td>
                            <td>
                               <input type='text' onkeypress='validate(event)' name="patient_age"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {!! Form::label('p_guard_cnt', 'Patient Guardian Contact') !!}
                            </td>
                            <td>
                                 <input type="number" name="p_guard_cnt" onkeypress='validate(event)'>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {!! Form::label('p_guard_add', 'Patient Guardian Address') !!}
                            </td>
                            <td>
                                {!! Form::text('p_guard_add', null, array('class' => 'field')) !!}
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                {!! Form::Submit('Insert / OK') !!}
                            </td>
                        </tr>
                        {!!  Form::close() !!}
                    </table>


        </div>
        <script>
            function validate(evt) {
              var theEvent = evt || window.event;
              var key = theEvent.keyCode || theEvent.which;
              key = String.fromCharCode( key );
              var regex = /[0-9]|\./;
              if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
            }

        </script>
        <script>
        function getRandomString(stringLength)
                    {
                        var ret = "";
                        for (var i=0; i<stringLength; i++){
                            var randNumb = 58;
                            //Use this cycle to discard values between 57 and 65 (non alpha-num ascii codes)
                            while (randNumb> 57 && randNumb < 65) {
                                randNumb = Math.floor(Math.random() * (90 - 48) + 48);
                            }
                            ret += String.fromCharCode(randNumb);
                        }
                        var textbox = document.getElementsByName('patient_id')[0];
                        textbox.value = ret;
                    }
        </script>
   @stop