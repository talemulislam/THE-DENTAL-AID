<?php

namespace App\Admin\Controllers;

use App\Models\Doctor;
use App\Models\Habit;
use App\Models\HomeCare;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use DB;

class PatientController extends Controller
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
            ->header('Patient')
            ->description( 'Details')
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
            ->header('Patient')
            ->description( 'Details')
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
            ->header('Patient ')
            ->description( 'Details')
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
            ->header('Patient Create')
            ->description( 'Details')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Patient);
        $user = Auth::guard('admin')->user();

        $grid->id('ID');
        $grid->name('name');
        $grid->phone('phone');
       /// $grid->emergency_phone('emergency_phone');
        $grid->address('address');
      //  $grid->permanent_address('permanent_address');
      //  $grid->photo('photo');
        $grid->city('city');
       // $grid->permanent_city('permanent_city');
        $grid->marital_status('marital_status');
       // $grid->spouse_name('spouse_name');
      //  $grid->spouse_phone('spouse_phone');
//        $grid->father_name('father_name');
//        $grid->mother_name('mother_name');
//        $grid->father_phone('father_phone');
//        $grid->mother_phone('mother_phone');
        $grid->date_of_birth('date_of_birth');
        $grid->occupation('occupation');
        $grid->hobby('hobby');
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));
        if ($user->isRole('user')){

            $grid->disableCreateButton();
            $grid->disablePagination();
            $grid->disableFilter();
            $grid->disableExport();
            $grid->model()->whereIn('admin_user_id', [$user->id]);
            $grid->actions(function ($actions) {
                // $actions->disableEdit();

                $actions->disableDelete();
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
        $show = new Show(Patient::findOrFail($id));

        $show->id('ID');
        $show->name('name');
        $show->phone('phone');
        $show->emergency_phone('emergency_phone');
        $show->address('address');
        $show->permanent_address('permanent_address');
        $show->photo('photo');
        $show->city('city');
        $show->permanent_city('permanent_city');
        $show->marital_status('marital_status');
        $show->spouse_name('spouse_name');
        $show->spouse_phone('spouse_phone');
        $show->father_name('father_name');
        $show->mother_name('mother_name');
        $show->father_phone('father_phone');
        $show->mother_phone('mother_phone');
        $show->date_of_birth('date_of_birth');
        $show->occupation('occupation');
        $show->hobby('hobby');
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
        $form = new Form(new Patient);

        //$form->display('ID');
        $form->text('name', 'name');
        $form->text('phone', 'phone')->rules('required|numeric|phone_number|phone_number_length', ['required' => 'Valid phone number required.']);
        $form->text('emergency_phone', 'emergency_phone');
        $form->email('email', 'Email');
        $form->textarea('address', 'address');
        $form->textarea('permanent_address', 'permanent_address');
        $form->image('photo', 'photo')->uniqueName()->move('images');
        $form->text('city', 'city');
        $form->text('permanent_city', 'permanent_city');
        $form->text('marital_status', 'marital_status');
        $form->text('spouse_name', 'spouse_name');
        $form->text('spouse_phone', 'spouse_phone');
        $form->text('father_name', 'father_name');
        $form->text('mother_name', 'mother_name');
        $form->text('father_phone', 'father_phone');
        $form->text('mother_phone', 'mother_phone');
        $form->date('date_of_birth', 'Date of Birth')->rules('required');
        $form->text('occupation', 'occupation');
        $form->textarea('hobby', 'hobby');
        $form->checkbox('medical_history','Medical History')->options(MedicalHistory::all()->pluck('name', 'id'));
        $form->checkbox('home_care','Home Care')->options(HomeCare::all()->pluck('name', 'id'));
        $form->checkbox('habit','Habit')->options(Habit::all()->pluck('name', 'id'));
       // $form->display(trans('admin.created_at'));
      //  $form->display(trans('admin.updated_at'));
        $form->saved(function (Form $form) {
            $id = $form->model()->id;
            $doctor = Patient::find($id);
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
                DB::table('admin_role_users')->insert(['role_id' => 4, 'user_id' => $user->id, 'created_at' => date('Y-m-d H:i:s')]);
            }
        });
        return $form;
    }
}
