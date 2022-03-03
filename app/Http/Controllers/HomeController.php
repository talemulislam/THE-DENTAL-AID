<?php


namespace App\Http\Controllers;


use App\Models\Hospital;
use App\Models\MedicineBD;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Prescription;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    function index()
    {
//dd('test');
        return view('home',[
            'doctor'=>Doctor::all(),
            'prescription'=>Prescription::all(),
            'patient'=>Patient::all(),
            'hospital'=>Hospital::all(),
            'service'=>Service::where('status','=','1')->orderBy('sort','ASC')->get()
        ]);
    }

    function prescription_details($id)
    {
        $prescription = Prescription::find($id);
        if ($prescription) {
            return view('prescription', [
                'is_data'=>true,
                'prescription' => $prescription,
                'medicine_details' => $prescription->medicine_details,
                'test_details' => $prescription->test_details,
                'doctor' => $prescription->doctor,
                'patient' => $prescription->patient
            ]);
        } else {
            return view('prescription', [
                'is_data'=>false,
            ]);
        }
    }

}
