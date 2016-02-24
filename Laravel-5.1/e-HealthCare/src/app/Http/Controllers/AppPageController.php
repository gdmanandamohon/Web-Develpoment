<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HospitaMMModel;
use Session;
use App\PatientTableAccess;
use App\ALLMMTableHandle;
use App\ECGTableHandle;
use Carbon\Carbon;
use Log;
class AppPageController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function admin()
    {
       // $admin_name = Session::get('admin_name');
        if (Session::get('admin_name') != null && Session::get('admin_pass') != null)
            return redirect('/admin/index');
        else
            return view('admin');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    /*****************************************
     ********** Admin Sections*************
     ******************************************/
    private function isAdminLoggedin()
    {
        if (Session::get('admin_name') != '' && Session::get('admin_pass') != '')
            return true;
        else
            return false;
    }


    public function vf_admin(Request $request)
    {
        $credintial = Request::all();
        $admin_name = $credintial['admin_name'];
        $admin_pass = $credintial['admin_pass'];

        $retrive_from_db = HospitaMMModel::all()->where('admin_uName', $admin_name)->where('admin_pass', $admin_pass);
        if (count(json_decode($retrive_from_db, true)) == 1) {
            Session::put('admin_name', $admin_name);
            Session::put('admin_pass', $admin_pass);

            return redirect('/admin/index');
        } else
            return redirect('/admin');

    }

    public function load_admin_panel()
    {


        if (AppPageController::isAdminLoggedin()) {
            $admin_name = Session::get('admin_name');
            return view('Admin.index')->with(compact('admin_name', $admin_name));
        } else
            return view('/admin');

    }

    public function destroy_admin_session()
    {
        Session::put('admin_name', '');
        Session::put('admin_pass', '');
        return redirect('/admin');

    }

    public function list_all_patients()
    {
        if (AppPageController::isAdminLoggedin())
        {
            $listOfAllPatients = PatientTableAccess::all();
            $admin_name = Session::get('admin_name');
            return view('Admin.patientsList')->with(compact('admin_name', $admin_name, 'listOfAllPatients', $listOfAllPatients));;
        } else
            return redirect('/admin');


    }

    public function insert_new_patient()
    {
        if (AppPageController::isAdminLoggedin()) {
            $listOfAllPatients = PatientTableAccess::all();
            $admin_name = Session::get('admin_name');
            return view('Admin.newPatient')->with(compact('admin_name', $admin_name));
        } else
            return redirect('/admin');
    }

    public function insert_new_patient_post()
    {

        if (AppPageController::isAdminLoggedin()) {
            $admin_name = Session::get('admin_name');
            $newPatientData = Request::all();
            //return $newPatientData;
            PatientTableAccess::create($newPatientData);
            echo("<script>alert('Succesfully Inserted');</script>>");

            //return view('Admin.newPatient')->with(compact('admin_name', $admin_name));
        } else
            return redirect('/admin');
    }

    public function details_patient($patient_id)
    {

        if (AppPageController::isAdminLoggedin()) {
            $retrive_from_db = PatientTableAccess::all()->where('patient_id',$patient_id);
            //return view('Admin.infoPatient');
            return $retrive_from_db;
        }
        else
            return redirect('/admin');
        //return PatientTableAccess::findOrNew($id);
        //if( AppPageController::isAdminLoggedin()) {

        //}
        //else
        //   return redirect ('/admin');

    }


    /*****************************************
     ********** Guardian Sections*************
     ******************************************/

    private function isGuardian_loggedin()
    {
        if (Session::get('patient_id') !=null && Session::get('allot_room_no') !=null)
            return true;
        else
            return false;

    }

    public function destroy_guardian_session()
    {
        Session::put('patient_id', '');
        Session::put('allot_room_no', '');
        Session::flush();
        return redirect ('/patient-info');
        //dd(Session::all());
    }
    public function vf_pat_guardian()
    {

        $credintial = Request::all();
        $patient_id = $credintial['patient_id'];
        $allot_room_no= $credintial['allot_room_no'];

        $retrive_from_db =PatientTableAccess::all()->where('allot_room_no', $allot_room_no )->where('patient_id',$patient_id);
        if(count(json_decode($retrive_from_db, true))==1)
        {
            Session::put('patient_id',  $patient_id);
            Session::put('allot_room_no', $allot_room_no);
            return redirect('/patient-info/index');

        }
        else
            return view('/patient-info');
    }

    public function patient_info()
    {
        if(AppPageController::isGuardian_loggedin()) {
            return AppPageController::load_patient_panel();
        }
        else
            return view('patient-info');

    }

    public function load_patient_panel()
    {
        if(AppPageController::isGuardian_loggedin()) {
            $patient_id = Session::get('patient_id');
            $patients_details = AppPageController::retrive_avout_patients_info($patient_id);

            $retriveECG = ECGTableHandle::all()->where('patient_id', $patient_id);
            $retriveAllMM = ALLMMTableHandle::all()->where('patient_id', $patient_id);
            if(count($retriveECG)==0&&count($retriveAllMM)==0)
            {
                return view('Patients.nodata')->with(compact('patients_details'));
            }

            $ECGSeries =$retriveECG[count($retriveECG)]['patient_ecg'];
            $pieces = explode(",", $ECGSeries);
            $counter =1;
            $data_ecg ='{x :'.$counter.', y :'.$pieces[0].'}';
            $counter =$counter+1;
            foreach ($pieces as &$value) {
                $data_ecg = $data_ecg.',{x :'.$counter.', y :'.$value.'}';
                $counter =$counter+1;
            }
            //return $data_ecg;


            $data_temp = "{x : new Date('".$retriveAllMM[count($retriveAllMM)]['created_at']."'), y :".$retriveAllMM[count($retriveAllMM)]['patient_body_temp']."}";
            //return $data_temp;
            //return $data_ecg.$data_temp;
            return view('Patients.index')->with(compact('data_ecg','data_temp','patients_details'));
        }
        else
            return view('patient-info');
    }

    public function load_patient_today_info()
    {
        if(AppPageController::isGuardian_loggedin())
        {

            $patient_id = Session::get('patient_id');
            $patients_details = AppPageController::retrive_avout_patients_info($patient_id);
            $retriveECG =  ECGTableHandle::whereRaw('date(created_at) = ?', [Carbon::today()])->where('patient_id', $patient_id )->get();
            $retriveAllMM = ALLMMTableHandle::whereRaw('date(created_at) = ?', [Carbon::today()])->where('patient_id', $patient_id )->get();
            if(count($retriveAllMM)==0|| count($retriveECG)==0)
            {
                return view('Patients.nodata')->with(compact('patients_details'));
            }
            else{
                $countOfData =count($retriveAllMM);
                $data_ecg =AppPageController::ecg_dataHandler($retriveECG);
                $data_temp =AppPageController::temp_dataHandler($retriveAllMM);
                //return  count($retriveAllMM);
                return view('Patients.today')->with(compact('data_ecg','data_temp','patients_details','countOfData'));
            }
        }
        else
            return view('patient-info');
    }
    public function load_patient_yesterday_info()
    {

        if(AppPageController::isGuardian_loggedin())
        {
            $patient_id = Session::get('patient_id');
            $patients_details = AppPageController::retrive_avout_patients_info($patient_id);
            $retriveECG =  ECGTableHandle::whereRaw('date(created_at) = ?', [Carbon::yesterday()])->where('patient_id', $patient_id )->get();
            $retriveAllMM = ALLMMTableHandle::whereRaw('date(created_at) = ?', [Carbon::yesterday()])->where('patient_id', $patient_id )->get();
            if(count($retriveAllMM)==0|| count($retriveECG)==0)
            {
                return view('Patients.nodata')->with(compact('patients_details'));

            }
            else{
                $countOfData =count($retriveAllMM);
                $data_ecg =AppPageController::ecg_dataHandler($retriveECG);
                $data_temp =AppPageController::temp_dataHandler($retriveAllMM);
                $patients_details = AppPageController::retrive_avout_patients_info($patient_id);
                $counter = 7;
                return view('Patients.yesterday')->with(compact('data_ecg','data_temp','patients_details','countOfData','counter'));
                //return $data_temp;
            }
        }
        else
            return redirect('/patient-info');
    }
    public function load_patient_weekly_info()
    {
        if(AppPageController::isGuardian_loggedin())
        {
            $patient_id = Session::get('patient_id');
            $counter = 1;
            $data_ecg = array();
            $data_temp = array();
            $day_matrix = array();
            for($i=1;$i<7;$i++)
            {
                $date = date('Y-m-d ', strtotime(-$i . 'days'));
                $retriveECG = ECGTableHandle::whereRaw('date(created_at) = ?', [$date])->where('patient_id', $patient_id)->get();
                $retriveAllMM = ALLMMTableHandle::whereRaw('date(created_at) = ?', [$date])->where('patient_id', $patient_id)->get();


                if (count($retriveECG) != 0 && count($retriveAllMM) != 0) {

                    $data_ecg[$counter] = AppPageController::ecg_dataHandler($retriveECG);
                    $data_temp[$counter] = AppPageController::temp_dataHandler($retriveAllMM);
                    $day_matrix[$counter]=$date;
                    //return AppPageController::ecg_dataHandler($retriveECG);
                    $counter++;
                }
                else
                    continue;
            }
           // return $counter;

           // $counter--;
            //return $data_ecg[0];
            $patients_details = AppPageController::retrive_avout_patients_info($patient_id);
            return view('Patients.weekly')->with(compact('data_ecg','data_temp','counter','patients_details','counter'));

        }
        else
            return redirect('/patient-info');
    }


    private function ecg_dataHandler($retriveECG)
    {
        $ECGSeries =$retriveECG[0]['patient_ecg'];

        foreach($retriveECG as &$retriveECGs)
        {
            $ECGSeries =$ECGSeries.",".$retriveECGs['patient_ecg'];
        }

        $pieces = explode(",", $ECGSeries);
        $counter =1;
        $data_ecg ='{x :'.$counter.', y :'.$pieces[0].'}';
        $counter =$counter+1;
        foreach ($pieces as &$value) {
            $data_ecg = $data_ecg.',{x :'.$counter.', y :'.$value.'}';
            $counter =$counter+1;
        }


        return $data_ecg;
    }
    private function temp_dataHandler($retriveAllMM)
    {

        $dataLength = (count($retriveAllMM));
        $tempSeries =$retriveAllMM[$dataLength-1]['patient_body_temp'];
        $tempTimeSeries = $retriveAllMM[$dataLength-1]['created_at'];
        $dataLength =$dataLength-2;
        while($dataLength>=0)
        {
            $tempSeries = $tempSeries.",".$retriveAllMM[$dataLength]['patient_body_temp'];
            $tempTimeSeries =$tempTimeSeries.",".$retriveAllMM[$dataLength]['created_at'];
                $dataLength--;
        }


        $pieces = explode(",", $tempSeries);
        $piecesTime = explode(",", $tempTimeSeries);
        $dataLength = count($pieces)-1;

        $data_B_Temp = "{x : new Date('".$piecesTime[$dataLength]."'), y :".$pieces[$dataLength]."}";
        $dataLength=$dataLength-1;

        while($dataLength>=0)
        {
            $data_B_Temp = $data_B_Temp.",{x : new Date('".$piecesTime[$dataLength]."'), y :".$pieces[$dataLength]."}";
           $dataLength--;

        }


        return $data_B_Temp;
    }
    private function retrive_avout_patients_info($patient_id)
    {
        $patients_details =PatientTableAccess::all()->where('patient_id',$patient_id);
        return $patients_details;
    }
}
