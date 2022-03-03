<?php

namespace App\Admin\Controllers;

use App\Models\HospitalUser;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class HospitalUserController extends Controller
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
        $grid = new Grid(new HospitalUser);

        $grid->id('ID');
        $grid->name('name');
        $grid->phone('phone');
        $grid->address('address');
        $grid->city('city');
        $grid->permanent_address('permanent_address');
        $grid->permanent_city('permanent_city');
        $grid->emergency_contact('emergency_contact');
        $grid->spouse_name('spouse_name');
        $grid->spouse_phone('spouse_phone');
        $grid->gender('gender');
        $grid->date_of_birth('date_of_birth');
        $grid->father_name('father_name');
        $grid->mother_name('mother_name');
        $grid->father_phone('father_phone');
        $grid->mother_phone('mother_phone');
        $grid->occupation('occupation');
        $grid->hobby('hobby');
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

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
        $show = new Show(HospitalUser::findOrFail($id));

        $show->id('ID');
        $show->name('name');
        $show->phone('phone');
        $show->address('address');
        $show->city('city');
        $show->permanent_address('permanent_address');
        $show->permanent_city('permanent_city');
        $show->emergency_contact('emergency_contact');
        $show->spouse_name('spouse_name');
        $show->spouse_phone('spouse_phone');
        $show->gender('gender');
        $show->date_of_birth('date_of_birth');
        $show->father_name('father_name');
        $show->mother_name('mother_name');
        $show->father_phone('father_phone');
        $show->mother_phone('mother_phone');
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
        $form = new Form(new HospitalUser);

      //  $form->display('ID');
        $form->text('name', 'name');
        $form->text('phone', 'phone');
        $form->text('address', 'address');
        $form->text('city', 'city');
        $form->text('permanent_address', 'permanent_address');
        $form->text('permanent_city', 'permanent_city');
        $form->text('emergency_contact', 'emergency_contact');
        $form->text('spouse_name', 'spouse_name');
        $form->text('spouse_phone', 'spouse_phone');
        $form->text('gender', 'gender');
        $form->text('date_of_birth', 'date_of_birth');
        $form->text('father_name', 'father_name');
        $form->text('mother_name', 'mother_name');
        $form->text('father_phone', 'father_phone');
        $form->text('mother_phone', 'mother_phone');
        $form->text('occupation', 'occupation');
        $form->text('hobby', 'hobby');
      //  $form->display(trans('admin.created_at'));
       // $form->display(trans('admin.updated_at'));
//
        return $form;
    }
}
