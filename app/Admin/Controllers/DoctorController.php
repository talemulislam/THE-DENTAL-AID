<?php

namespace App\Admin\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use DB;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header("Doctor")
            ->description(trans('admin.description'))
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
            ->header('Doctor')
            ->description(trans('admin.description'))
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
            ->header('Doctor')
            ->description(trans('admin.description'))
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
            ->header('Doctor')
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Doctor);
        $user = Auth::guard('admin')->user();
      //  $grid->id('ID');
        $grid->name('Name');
       // $grid->description('description');
        $grid->specialty('Specialty');
        $grid->title('Title');
        $grid->degrees('Degrees');
        $grid->departnemt_id('Departnemt')->display(function ($department_id) {

            return  Department::where('id',$department_id)->select('name')->first()->name;
        });;
       // $grid->date_of_birth('date_of_birth');
       // $grid->image('Photo')->photo('', 50);
        $grid->phone('Phone');
      //  $grid->emergency_phone('emergency_phone');
      //  $grid->serial_phone('serial_phone');
      //  $grid->office_phone('office_phone');
        $grid->address('Address');
//        $grid->permanent_address('permanent_address');
//        $grid->marital_status('marital_status');
//        $grid->spouse_phone('spouse_phone');
//        $grid->spouse_name('spouse_name');
//        $grid->experienced_details('experienced_details');
        $grid->created_at(trans('admin.created_at'))->display(function ($created_at) {

            return  date('Y M d h:i a',strtotime($created_at));
        });
        $grid->updated_at(trans('admin.updated_at'))->display(function ($updated_at) {

            return  date('Y M d h:i a',strtotime($updated_at));
        });
        if ($user->isRole('user')){

            $grid->model()->whereIn('id', [0,-1,-2]);
        }

        if ($user->isRole('doctor')){
            $grid->disableCreateButton();
            $grid->disablePagination();
            $grid->disableFilter();
            $grid->disableExport();
            $grid->actions(function ($actions) {
                // $actions->disableEdit();
                $actions->disableView();
                $actions->disableDelete();
            });
            $grid->model()->whereIn('admin_user_id', [$user->id]);
        }else{
            $grid->actions(function ($actions) {
                // $actions->disableEdit();

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
        $show = new Show(Doctor::findOrFail($id));

        $show->id('ID');
        $show->name('name');
        $show->description('description');
        $show->specialty('specialty');
        $show->title('title');
        $show->degrees('degrees');
//        $show->departnemt_id('departnemt_id')->display(function ($department_id) {
//
//            return  Department::where('id',$department_id)->select('name')->first()->name;
//        });
        $show->date_of_birth('date_of_birth');
        $show->image('photo')->photo();
        $show->phone('phone');
        $show->emergency_phone('emergency_phone');
        $show->serial_phone('serial_phone');
        $show->office_phone('office_phone');
        $show->address('address');
        $show->permanent_address('permanent_address');

        $show->spouse_phone('spouse_phone');
        $show->spouse_name('spouse_name');
        $show->experienced_details('experienced_details');
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
        $form = new Form(new Doctor);
        $arr_department = array();
        $department = Department::all();
        foreach ($department as $key => $value) {
            $arr_department[$value['id']] = $value['name'] ;
        }
       // $form->display('ID');
        $form->text('name', 'name');
        $form->textarea('description', 'description');
        $form->text('specialty', 'specialty');
        $form->text('title', 'title');
        $form->text('degrees', 'degrees');
        $form->select('departnemt_id', 'Departnemt')->options($arr_department);
        $form->date('date_of_birth', 'date_of_birth');
        $form->image('photo', 'photo')->uniqueName()->move('images');
        $form->text('phone', 'phone')->rules('required|numeric|phone_number|phone_number_length', ['required' => 'Valid phone number required.']);
        $form->text('emergency_phone', 'emergency_phone');
        $form->text('serial_phone', 'serial_phone');
        $form->text('office_phone', 'office_phone');
        $form->textarea('address', 'address');
        $form->text('permanent_address', 'permanent_address');
        $form->switch('marital_status', 'marital_status');
        $form->text('spouse_phone', 'spouse_phone');
        $form->text('spouse_name', 'spouse_name');
        $form->textarea('experienced_details', 'experienced_details');
        //$form->display(trans('admin.created_at'));
       // $form->display(trans('admin.updated_at'));
        $form->saved(function (Form $form) {
            $id = $form->model()->id;
            $doctor = Doctor::find($id);

            $user = Administrator::where('username', '=', $doctor->phone)->first();
            if ($user) {
                $doctor->admin_user_id=$user->id;
                $doctor->save();
            } else {
                $user = new Administrator();
                $user->username = $doctor->phone;
                $user->password = bcrypt($doctor->phone);
                $user->name = $doctor->name;
                $user->avatar = $doctor->photo;
                $user->remember_token = '';
                $user->save();
                $doctor->admin_user_id=$user->id;
                $doctor->save();
                DB::table('admin_role_users')->insert(['role_id' => 3, 'user_id' => $user->id, 'created_at' => date('Y-m-d H:i:s')]);
            }
        });
        return $form;
    }
}
