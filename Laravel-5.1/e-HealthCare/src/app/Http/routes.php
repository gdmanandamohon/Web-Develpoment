<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','AppPageController@home');
Route::get('/services', 'AppPageController@services');
Route::get('/patient-info', 'AppPageController@patient_info');
Route::get('/admin', 'AppPageController@admin');
Route::get('/contact-us', 'AppPageController@contact_us');
Route::post('/admin', 'AppPageController@vf_admin');



Route::get('/admin/index', 'AppPageController@load_admin_panel');
Route::get('/admin/logout', 'AppPageController@destroy_admin_session');


//Admin Control
Route::get('/admin/New-Patient', 'AppPageController@insert_new_patient');
Route::post('/admin/New-Patient', 'AppPageController@insert_new_patient_post');

Route::get('/admin/Patients-List', 'AppPageController@list_all_patients');

Route::get('/admin/Patients-List/{patient_id}', 'AppPageController@details_patient');

//Guardian Control
Route::post('/patient-info', 'AppPageController@vf_pat_guardian');
Route::get('/patient-info/index', 'AppPageController@load_patient_panel');
Route::get('/patient-info/today', 'AppPageController@load_patient_today_info');
Route::get('/patient-info/yesterday', 'AppPageController@load_patient_yesterday_info');
Route::get('/patient-info/weekly', 'AppPageController@load_patient_weekly_info');
Route::get('/patient-info/logout', 'AppPageController@destroy_guardian_session');
Route::get('/patient-info/nodata','AppPageController@nodata' );

