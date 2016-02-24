<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 30-Oct-15
 * Time: 11:08 AM
 */ ?>

     @extends('app')

      @section('page-title')
      Welcome | Patient ID: {{$patients_details[0]['patient_id']}}
      @stop
      @section('menu-bar')
                 <li><a href="/patient-info/index" >Patient Overview</a></li>
                 <li><a href="/patient-info/today">Today</a></li>
                 <li><a href="/patient-info/yesterday">Yesterday</a></li>
                 <li><a href="/patient-info/weekly" class="current">Last 7 Days </a></li>
                 <li><a href="/patient-info/logout">Logout</a></li>

      @stop

      @section('page-content')
      <div id="templatemo_main"><span class="main_top"></span>
             <div id="content-viewer-div">
                  <div style="width:100%; height: 500px; ">
                      <div style="width: 29%; background: #fcfaff;float: left; border: 1px solid #000000">
                          <img src="" alt="">
                          <p>Details of patient</p>
                          <p><h4>Room No : {{$patients_details[0]['allot_room_no']}}</h4></p>
                          <p><h4>Patient ID: {{$patients_details[0]['patient_id']}}</h4></p>

                          <p>Name: {{$patients_details[0]['name']}}</p>
                          <p>Patient Age: {{$patients_details[0]['patient_age']}}</p>
                          <p> Guardian : {{$patients_details[0]['p_guard_add']}}</p>
                          <p>Contact : {{$patients_details[0]['p_guard_cnt']}}</p>
                          <p>Admission Date: {{$patients_details[0]['created_at']}}</p>
                      </div>
                      <div style="width: 70%; height: 500px; background: #dddddd; float: left; border: 1px solid #000000">
                          <div>
                              <div id="EcgChart1" style="height: 300px; width: 100%;"></div>


                          </div>
                          <div>Pressure : </div>
                          <div>Temperature : </div>
                          <div>Room Temperature : </div>
                          <div>Room Humidity : </div>
                          <div>Room Light : </div>
                          <div>Patients position :{{$counter}} </div>
                          <div>Patients Help : </div>
                      </div>
                  </div>
             </div>
      </div>
      <script type="text/javascript" src="{{asset('js/ecgProcess/jquery-1.11.1.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/ecgProcess/jquery.canvasjs.min.js')}}"></script>
     <script type="text/javascript">
             $(function () {
             	//Better to construct options first and then pass it as a parameter

             	var options = {
             		title: {
             			text: "Patients ECG Signal"
             		},
                     animationEnabled: true,
             		data: [
                             {
                                 type: "spline", //change it to line, area, column, pie, etc
                                 dataPoints:  [{!! $data_ecg[0] !!}]
                             }
             		]
             	};

             	$("#EcgChart1").CanvasJSChart(options);

             });
        </script>





      @stop
