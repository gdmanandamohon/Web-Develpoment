<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 30-Oct-15
 * Time: 10:53 AM
 */ ?>


    @extends('app')

     @section('page-title')
     Welcome | Patient ID:{$patients_details[0]['patient_id']}}
     @stop
     @section('menu-bar')
                 <li><a href="/patient-info/index" class="current">Patient Overview</a></li>
                 <li><a href="/patient-info/today">Today</a></li>
                 <li><a href="/patient-info/yesterday">Yesterday</a></li>
                 <li><a href="/patient-info/weekly">Last 7 Days </a></li>
                 <li><a href="/patient-info/logout">Logout</a></li>

     @stop

     @section('page-content')
     <div id="templatemo_main " style=" background: #DDDDDD;margin: auto; width: 970px;"><span class="main_top"></span>
        <div id="patients-info" style="height: 100px; padding-top: 10px; background:#DDDDDD; float: left">
            <div style="float: left ; padding-left: 10px; width: 120px;">
                Local Time
                <embed src="http://www.clocklink.com/clocks/5005-blue.swf?TimeZone=GMT0600" width="120" height="40" wmode="transparent" type="application/x-shockwave-flash">
            </div>
            <div style="float: left; padding-left: 10px; width:830px; ">
                   <table border="1" style="width:100%">
                     <tr>
                       <td colspan="6"><center>Detail's About the patient</center></td>

                     </tr>
                     <tr>
                       <td colspan="2"> Patient ID : {{$patients_details[0]['patient_id']}} </td>
                       <td colspan="2">Room No :  {{$patients_details[0]['allot_room_no']}}</td>
                       <td colspan="2">Age : {{$patients_details[0]['patient_age']}}</td>

                     </tr>
                     <tr>
                       <td colspan="3">Name : {{$patients_details[0]['name']}}</td>
                       <td colspan="3">Contact No: {{$patients_details[0]['p_guard_cnt']}}</td>

                     </tr>
                     <tr>
                       <td colspan="3">Adress : {{$patients_details[0]['p_guard_add']}} </td>
                       <td colspan="3">Admission Date : {{$patients_details[0]['created_at']}}</td>

                     </tr>
                   </table>

            </div>
        </div>

        <div id="measurement-info">
            <p>Patient's last Data are shown</p>
            <div class="all-mm" style=" width: 100%;">
                <div style="float: left; padding: 5px">
                      <table border="1">
                             <tr>
                                 <td colspan="2">Body Temprature</td>

                             </tr>
                             <tr>
                                 <td>Eto Degree</td>
                                 <td>Eto Degree</td>
                             </tr>
                             <tr>
                                <td>Time</td>
                                <td>Time</td>
                             </tr>
                      </table>
                </div>
            </div>
            <div class="all-mm" style=" width: 100%;">
                <div style="float: left; padding: 5px">
                      <table border="1">
                             <tr>
                                 <td colspan="2">Light In Patients Room</td>

                             </tr>
                             <tr>
                                 <td>Eto Degree</td>
                                 <td>Eto Degree</td>
                             </tr>
                             <tr>
                                <td>Time</td>
                                <td>Time</td>
                             </tr>
                      </table>
                </div>
            </div>
            <div class="all-mm" style=" width: 100%;">
                <div style="float: left; padding: 5px">
                      <table border="1">
                             <tr>
                                 <td colspan="2">Patients Room Humidity</td>

                             </tr>
                             <tr>
                                 <td>Eto Degree</td>
                                 <td>Eto Degree</td>
                             </tr>
                             <tr>
                                <td>Time</td>
                                <td>Time</td>
                             </tr>
                      </table>
                </div>
            </div>
            <div class="all-mm" style=" width: 100%;">
                <div style="float: left; padding: 5px">
                      <table border="1">
                             <tr>
                                 <td colspan="2">Patients Position</td>

                             </tr>
                             <tr>
                                 <td>Eto Degree</td>
                                 <td>Eto Degree</td>
                             </tr>
                             <tr>
                                <td>Time</td>
                                <td>Time</td>
                             </tr>
                      </table>
                </div>
            </div>
            <div id="EcgChart" style="height: 300px; width: 100%; overflow-x:scroll; overflow-y: hidden"></div>
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
                         dataPoints:  [{{ $data_ecg }}]
                     }
     		]
     	};

     	$("#EcgChart").CanvasJSChart(options);

     });
     </script>
@stop
