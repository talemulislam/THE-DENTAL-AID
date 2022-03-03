<?php

namespace App\Admin\Controllers;

use App\Models\Hospital;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Service;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
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
            ->header('Our Service')
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
        $grid = new Grid(new Service);
        $user = Auth::guard('admin')->user();
        // $grid->id('ID');
        $grid->service_name('Service Name')->editable();
        $grid->service_description('Service Description')->editable('textarea');;
        $grid->service_time('Service Time')->editable();
        $grid->sort('Sort')->editable();
        $grid->column('status', 'Display on website')->switch();
        //  $grid->descriptions('Descriptions');

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
            $grid->column('created_at', 'Created At')->display(function ($created_at) {

                return date('d-M-Y H:i', strtotime($created_at));

            });
            $grid->column('updated_at', 'Updated At')->display(function ($created_at) {

                return date('d-M-Y H:i', strtotime($created_at));

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
        $show = new Show(Service::findOrFail($id));

        $show->id('ID');
        $show->service_name('Service Name');
        $show->service_description('Service Description');
      //  $show->icon()->image();
        $show->service_time('Service Time')->as(function ($service_time) {

                return $service_time.' Min';

        });
        $show->sort('Sort');
        $show->status('Display on website')->as(function ($status) {
            if ($status == 1) {
                return "On";
            }else{
                return "Off";
            }
        });

        // $show->descriptions('descriptions');
        $show->created_at('Created At')->date('d-M-Y');
        $show->updated_at('Updated At')->date('d-M-Y');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Service());
//        $form->tab('Hospital Information', function ($form) {
//            $user = Auth::guard('admin')->user();
//            // $form->display('ID');
//            $form->text('name', 'name');
//            $form->textarea('address', 'address');
//            $form->text('phone', 'phone');
//            $form->text('email', 'email');
//            $form->textarea('descriptions', 'descriptions');
//            $form->display(trans('admin.created_at'));
//            $form->display(trans('admin.updated_at'));
//        })->tab('Our Services', function ($form) {
        //   $form->hasMany('services', ' ', function (Form\NestedForm $form) {
        $form->text('service_name', 'Service Name');
        $form->textarea('service_description', 'Service Description')->rows(2);
        $form->number('service_time', 'Service Time')->help('Enter time in min.');
        $form->number('sort', 'Sort')->rules('numeric|min:0')->default(0);
        $form->switch('status', 'Display on website')->default(1);
       // $form->image('icon', 'Image icon')->uniqueName()->move('images');
        // $form->
        if ($form->isEditing()) {
            $form->hidden("updated_by")->default(Admin::user()->id);
            //  $form->hidden("updated_at")->default();
        } else {
            $form->hidden("created_by")->default(Admin::user()->id);
            // $form->hidden("created_at")->default();
        }
        //   });
        // });


        return $form;
    }
}
