<?php

namespace App\Admin\Controllers;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Models\AppointmentStatus;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\ScheduleDate;
use App\Models\Service;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    use HasResourceActions;

    public $service;

    public function __construct()
    {
        $this->service = Service::where('status', '=', '1')->orderBy('sort', 'ASC')->get();
    }

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Appointment')
            ->description('Make appointment ')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Appointment')
            ->description('Make appointment')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Appointment')
            ->description('Make appointment')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Appointment')
            ->description('Make appointment')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Appointment);
        $user = Auth::guard('admin')->user();
        // $grid->id('ID');
        $grid->appointment_date('Appointment Date');
        $grid->appointment_time_slot('Appointment Time slot');
        $grid->department_id('Department')->display(function ($department_id) {

            return Department::where('id', $department_id)->select('name')->first()->name ?? '';
        });
        $grid->doctor_id('Doctor')->display(function ($doctor_id) {

            return Doctor::where('id', $doctor_id)->select('name')->first()->name ?? '';
        });
        $grid->client_id('Patient')->display(function ($client_id) {
            return Patient::where('id', $client_id)->select('name')->first()->name ?? '';
        });
        $grid->status('Status')->display(function ($status_id) {

            return AppointmentStatus::where('id', $status_id)->select('name')->first()->name ?? '';
        });
        $grid->created_at(trans('admin.created_at'))->display(function ($created_at) {

            return date('Y M d h:i a', strtotime($created_at));
        });
        $grid->updated_at(trans('admin.updated_at'))->display(function ($updated_at) {

            return date('Y M d h:i a', strtotime($updated_at));
        });

        if ($user->isRole('user')) {
            $ids = Patient::where('admin_user_id', '=', $user->id)->select('id')->get();
            $id = '0';
            foreach ($ids as $val) {

                $id = $val->id . ',' . $id;
            }
            $grid->model()->whereIn('client_id', [$id]);
            $grid->actions(function ($actions) {
                $actions->disableDelete();

                $actions->disableView();
            });
        } else {
            $grid->actions(function ($actions) {

                $actions->disableView();
            });
        }


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Appointment::findOrFail($id));

        $show->id('ID');
        $show->scheduled_time('scheduled_time');
        $show->rescheduled_to('rescheduled_to');
        $show->status('status');
        $show->hospital_id('hospital_id');
        $show->department_id('department_id');
        $show->doctor_id('doctor_id');
        $show->client_id('client_id');
        $show->created_at(trans('admin.created_at'));
        $show->updated_at(trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Appointment);
        $user = Auth::guard('admin')->user();
        $arr_status = array();
        $a_status = AppointmentStatus::all();
        foreach ($a_status as $key => $value) {
            $arr_status[$value['id']] = $value['name'];
        }
        $arr_hospital = array();
        $hospital = Hospital::all();
        foreach ($hospital as $key => $value) {
            $arr_hospital[$value['id']] = $value['name'];
        }
        $arr_department = array();
        $department = Department::all();
        foreach ($department as $key => $value) {
            $arr_department[$value['id']] = $value['name'];
        }
        $arr_doctor = array();
        $doctor = Doctor::all();
        foreach ($doctor as $key => $value) {
            $arr_doctor[$value['id']] = $value['name'];
        }
        $arr_patient = array();
        $patient = Patient::all();
        foreach ($patient as $key => $value) {
            $arr_patient[$value['id']] = $value['name'] . ' ( ' . $value['phone'] . ' )';
        }

        $arr_service = array();
        foreach ($this->service as $key => $value) {
            $arr_service[$value['id']] = $value['service_name'];
        }
        $timestamp = strtotime(date('Y-m-d'));
        $days = array();

//        for ($i = 0; $i < 100; $i = $i + 1) {
//            if ($i == 0) {
//                $days[] = strftime('Today %d %b ', $timestamp);
//            } elseif ($i == 1) {
//                $days[strftime('%A %d %b %Y', $timestamp)] = strftime('%A %d %b %Y', $timestamp);
//            } else {
//                $days[strftime('%A %d %b %Y', $timestamp)] = strftime('%A %d %b %Y', $timestamp);
//            }
//            $timestamp = strtotime('+1 day', $timestamp);
//        }

        $schedule_date = ScheduleDate::where('status', '=', "1")->where('date', '>=', date('Y-m-d'))->take(100)->get();
        foreach ($schedule_date as $val) {
            $days[] = strftime('%A %d %b %Y', strtotime($val->date));
        }
        $interval = 1;
        $time_slot = array();
        //dd(date('Y-m-d').' '.$shopDetails->delivery_start_time);
        $timestamp = strtotime(date('Y-m-d') . ' 09:00:00');
        $endtimestamp = strtotime(date('Y-m-d') . ' 22:00:00');
        //$timestamp = strtotime('+1 day', $timestamp);
        $first = strftime('%I:00 %p', $timestamp);
        //dd($timestamp);
        for ($i = 0; $i < 24; $i = $i + $i) {
            $timestamp = strtotime('+' . $interval . ' hour', $timestamp);
            $last = strftime('%I:00 %p', $timestamp);

            if ($endtimestamp < $timestamp) {
                break;
            } else {
                $time_slot[$first . ' - ' . $last] = $first . ' - ' . $last;
            }
            $first = $last;
        }
        $form->select('doctor_id', 'Doctor')->options($arr_doctor)->default(1);
        if ($user->isRole('user')) {
            $login_doctor = Patient::where('admin_user_id', '=', $user->id)->first();
            $form->hidden('client_id')->default($login_doctor->id);
        } else {
            $form->select('client_id', 'Patient Name')->options($arr_patient);
        }

        $form->select('service_id', 'Service type')->options($arr_service)->attribute(['id' => 'service_id', 'onchange' => 'appointment_time_slot_load()'])->default(14);
        $form->select('appointment_date', 'Appointment Date')->attribute(['id' => 'appointment_date']);

       // $form->select('appointment_time_slot', 'Available Time Slot')->options($time_slot)->attribute('id', 'appointment_time_slot');
        $form->select('status', 'Status')->options($arr_status)->default(1);
        // $form->select('hospital_id', 'Hospital Name')->options($hospital);
        //  $form->select('department_id', 'Department')->options($arr_department);


        // $form->display(trans('admin.created_at'));
        // $form->display(trans('admin.updated_at'));
        $form->saved(function (Form $form) {
            $id = $form->model()->id;
            $data = Appointment::find($id);
            $appointment_time = explode(' - ', $data['appointment_time_slot']);
            try {

                $data->appointments_time_start = date('Y-m-d H:i:s', strtotime($data['appointment_date'] . ' ' . $appointment_time[0]));
                $data->appointments_time_end = date('Y-m-d H:i:s', strtotime($data['appointment_date'] . ' ' . $appointment_time[1]));
                $data->save();
            } catch (\Exception $exception) {

            }

            $patient = Patient::find($data->client_id);
            if ($data['status'] == 1 || $data['status'] == '1' || $data['status'] == 4 || $data['status'] == '4') {
                $message = 'Appointment is confirmed. Your login id=' . $patient['phone'] . ' and password=' . $patient['phone'] . '. Try to reached at ' . $data['appointment_date'] . ', time:' . $data['appointment_time_slot'] . '.';
                sendSMS('88' . $patient['phone'], $message);
            } elseif ($data['status'] == 3 || $data['status'] == '3') {
                $message = 'Appointment is canceled. Your login id=' . $patient['phone'] . ' and password=' . $patient['phone'] . '. Thank you ';
                sendSMS('88' . $patient['phone'], $message);
            } else {

            }

        });
        return $form;
    }
}
