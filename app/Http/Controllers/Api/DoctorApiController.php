<?php


namespace App\Http\Controllers\Api;

use App\Admin\Controllers\ScheduleDateController;
use App\Models\MedicineBD;
use App\Models\Medicine;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Models\ScheduleDate;
use App\Models\Service;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Encore\Admin\Auth\Database\Administrator;
use DB;

class DoctorApiController extends Controller
{
    public function doctors_list(Request $request)
    {

        $q = $request->get('q');
        return Doctor::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }

    public function medicine_list(Request $request)
    {

        $q = $request->get('q');
        $data = MedicineBD::where('name', 'like', "%$q%")->paginate(null, ['name', 'name as text']);
        return $data;
    }

    public function medicine_list_load(Request $request)
    {

        $q = $request->get('q');
        $data = Medicine::where('generic_name', 'like', "%$q%")->select('id', DB::raw("CONCAT(h_medicine_bds.brand_name,' ( ',h_medicine_bds.strength,') ',h_medicine_bds.dosage_description,' (',h_medicine_bds.name_of_the_manufacturer,' )') AS name"))->get();
        $res = array();
        foreach ($data as $val) {
            $res[] = ['id' => $val->id, 'text' => $val->name];
        }
        return $res;

    }

    public function appointment_time_slot_load(Request $request)
    {
       //
        $service_id = $request->get('service_id');
      //  $date = $request->get('date');
        $time = Service::find($service_id);
        $service_time = 15;
      //  $date = date('Y-m-d', strtotime($date));
        if ($time) {
            $service_time = $time->service_time;
        }
        $schedule_date = ScheduleDate::where('status', '=', "1")->where('date', '>=', date('Y-m-d'))->take(100)->get();
        //  dd($schedule_date);
        $days=array();
        if ($schedule_date) {
            foreach ($schedule_date as $val) {
                if ($val->remaining_time_in_minutes > $service_time) {
                    $d=strftime('%A %d %b %Y', strtotime($val->date));
                    $res[] = ['id' =>$d,'text'=>$d];
                }
            }
        } else {
            $res['status'] = 'Error';
            $res['message'] = 'Your requested date is not available.';
            return $res;
        }
        return $res;
    }

    public function get_available_time($time)
    {
        $appointment = Appointment::where('appointments_time_start');
        return "";
    }

    public function make_appointment(Request $request)
    {
        $res['status'] = true;
        $res['message'] = 'Data save successfully. Soon you get a sms.';
        $data['message'] = $request->get('message');
        $data['appointment_time_slot'] = $request->get('appointment_time_slot');
        $data['appointment_date'] = $request->get('appointment_date');
        $data['email'] = $request->get('email');
        $data['mobile'] = substr($request->get('mobile'), -11);
        $data['full_name'] = $request->get('full_name');
        $data['gender'] = $request->get('gender');
        // print_r($data);
        if (strlen($data['mobile']) == 11 && substr($data['mobile'], 0, 2) == '01') {
            $user = Administrator::where('username', '=', $data['mobile'])->first();
            if ($user) {

            } else {
                $user = new Administrator();
                $user->username = $data['mobile'];
                $user->password = bcrypt($data['mobile']);
                $user->name = $data['full_name'];
                $user->avatar = '';
                $user->remember_token = '';
                $user->save();
                DB::table('admin_role_users')->insert(['role_id' => 4, 'user_id' => $user->id, 'created_at' => date('Y-m-d H:i:s')]);
            }
            $patient = Patient::where('admin_user_id', '=', $user->id)->first();
            if ($patient) {

            } else {
                $patient = new Patient();
                $patient->name = $data['full_name'];
                $patient->admin_user_id = $user->id;
                $patient->phone = $data['mobile'];
                $patient->email = $data['email'];
                $patient->email = $data['gender'];
                $patient->save();
            }

            $appointment_time = $data['appointment_time_slot'];
            $appointment = Appointment::where('client_id', '=', $patient->id)
                ->where('appointment_date', '=', $data['appointment_date'])
                ->first();
            if ($appointment) {
                $res['message'] = 'You have already an appointment on this date. Your appointment date is ' . $appointment->appointment_date . ' ' . $appointment->appointment_time_slot . '.  You can login using userid=' . $data['mobile'] . ' and password ' . $data['mobile'] . ' and see details about your appointment';
            } else {

                $appointment = new Appointment();
                $appointment->client_id = $patient->id;
                $appointment->doctor_id = 1;
                $appointment->department_id = 1;
                $appointment->hospital_id = 1;
                $appointment->status = 1;
                $appointment->message = $data['message'];
                $appointment->appointment_time_slot = $data['appointment_time_slot'];
                $appointment->appointment_date = $data['appointment_date'];
                //  $appointment->doctor_id = $data['doctor_id'];
                try {

                    $appointment->appointments_time_start = date('Y-m-d H:i:s', strtotime($data['appointment_date'] . ' ' . $appointment_time));
                    $appointment->appointments_time_end = date('Y-m-d H:i:s', strtotime($data['appointment_date'] . ' ' . $appointment_time));
                } catch (\Exception $exception) {

                }
                $appointment->save();
                $res['message'] = 'Your appointment is confirmed. You can login using userid=' . $data['mobile'] . ' and password ' . $data['mobile'] . ' You also get a sms soon';
                $message = 'Appointment is confirmed. Your login id=' . $data['mobile'] . ' and password=' . $data['mobile'] . '. Try to reached at ' . $data['appointment_date'] . ', time:' . $data['appointment_time_slot'] . '.';
                sendSMS('88' . $data['mobile'], $message);
            }

        } else {
            $res['status'] = false;
            $res['message'] = 'Invalid mobile number. please provide a valid mobile number.';
        }

        //var_dump($data);

//dd($request);

        return $res;
    }

    function fetch_medicine(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('v_medicines')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '
       <li><a href="#">' . $row->name . '</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

}
