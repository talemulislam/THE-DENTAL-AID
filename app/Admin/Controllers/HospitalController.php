<?php

namespace App\Admin\Controllers;

use App\Models\Hospital;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
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
            ->header('The Dental Aid')
            //  ->description(trans('admin.description'))
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
            ->header(trans('admin.detail'))
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
            ->header(trans('admin.edit'))
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
            ->header(trans('admin.create'))
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
        $grid = new Grid(new Hospital);
        $user = Auth::guard('admin')->user();
        // $grid->id('ID');
        $grid->name('Name');
        $grid->address('Address');
        $grid->phone('Phone');
        $grid->email('Email');
        $grid->descriptions('Descriptions');

        if ($user->isRole('user') || $user->isRole('doctor')) {

//            $ids=Patient::where('admin_user_id','=',$user->id)->select('id')->get();
//            $id='0';
//            foreach ($ids as $val){
//
//                $id=$val->id.','.$id;
//            }
//            $grid->model()->whereIn('patient_id', [$id]);
            $grid->disableActions();
            $grid->disableCreateButton();
            $grid->disablePagination();
            $grid->disableFilter();
            $grid->disableExport();
        } else {
            $grid->created_at(trans('admin.created_at'));
            $grid->updated_at(trans('admin.updated_at'));
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
        $show = new Show(Hospital::findOrFail($id));

        $show->id('ID');
        $show->name('name');
        $show->address('address');
        $show->phone('phone');
        $show->email('email');
        $show->descriptions('descriptions');
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
        $form = new Form(new Hospital);
        $form->tab('Hospital Information', function ($form) {
            $user = Auth::guard('admin')->user();
            // $form->display('ID');
            $form->text('name', 'name');
            $form->textarea('address', 'address');
            $form->text('phone', 'phone');
            $form->text('email', 'email');
            $form->textarea('descriptions', 'descriptions');
            $form->display(trans('admin.created_at'));
            $form->display(trans('admin.updated_at'));
        })->tab('Our Services', function ($form) {
            $form->hasMany('services', ' ', function (Form\NestedForm $form) {
                $form->text('service_name', 'Service Name');
                $form->textarea('service_description', 'Service Description')->rows(2);
                $form->number('service_time', 'Service Time')->help('Enter time in min.');
                $form->number('sort', trans('language.admin.sort'))->rules('numeric|min:0')->default(0);
                // $form->
                if ($form->isEditing()) {
                    $form->hidden("updated_by")->default(Admin::user()->id);
                    //  $form->hidden("updated_at")->default();
                } else {
                    $form->hidden("created_by")->default(Admin::user()->id);
                    // $form->hidden("created_at")->default();
                }
            });
        });


        return $form;
    }
}
