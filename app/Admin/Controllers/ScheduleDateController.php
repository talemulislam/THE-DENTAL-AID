<?php

namespace App\Admin\Controllers;

use App\Models\ScheduleDate;
use App\Models\TestTable;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ScheduleDateController extends Controller
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
            ->header(trans('admin.index'))
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
        $grid = new Grid(new ScheduleDate());

        $grid->id('ID');
        $grid->column('date','Date')->display(function ($created_at) {

            return date('l, d-M-Y', strtotime($created_at));

        });
        $grid->open_time('Open Time');
        $grid->close_time('Close Time');
        $grid->column('status', 'Display on website')->switch();
//        $grid->column('created_at', 'Created At')->display(function ($created_at) {
//
//            return date('d-M-Y H:i', strtotime($created_at));
//
//        });
//        $grid->column('updated_at', 'Updated At')->display(function ($created_at) {
//
//            return date('d-M-Y H:i', strtotime($created_at));
//
//        });

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
        $show = new Show(ScheduleDate::findOrFail($id));

        $show->id('ID');

        $show->date('Date');
        $show->open_time('Open Time');
        $show->close_time('Close Time');
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
        $form = new Form(new ScheduleDate);
        //$form->display('ID');
        $form->date('date', 'Date')->default(date('Y-m-d'));
        $form->time('open_time', 'Open Time')->format('HH:mm')->default('17:00');
        $form->time('close_time', 'Close Time')->format('HH:mm')->default('21:00');
        $form->switch('status', 'Status')->default(1);
        // $form->image('icon', 'Image icon')->uniqueName()->move('images');
        // $form->
        if ($form->isEditing()) {
            $form->hidden("updated_by")->default(Admin::user()->id);
            //  $form->hidden("updated_at")->default();
        } else {
            $form->hidden("created_by")->default(Admin::user()->id);
            // $form->hidden("created_at")->default();
        }

        return $form;
    }
}
