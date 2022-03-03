<?php

namespace App\Admin\Controllers;

use App\Models\Medicine;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class MedicineController extends Controller
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
        $grid = new Grid(new Medicine);

       // $grid->id('ID');

        $grid->generic_name('Generic Name');
        $grid->brand_name('Brand Name');
        $grid->strength('Strength');
        $grid->dosage_description('Dosage Description');
        $grid->name_of_the_manufacturer('Name');
        $grid->price('Price');
        $grid->use_for('Use For');
//        $grid->renal_dose('renal_dose');
//        $grid->administration('administration');
//        $grid->contraindications('contraindications');
//        $grid->side_effects('side_effects');
//        $grid->precautions('precautions');
//        $grid->pregnancy_lactation('pregnancy_lactation');
//        $grid->therapeutic_class('therapeutic_class');
//        $grid->mode_of_action('mode_of_action');
//        $grid->interaction('interaction');
        $grid->created_at(trans('admin.created_at'))->display(function ($created_at) {

            return  date('Y M d h:i a',strtotime($created_at));
        });
        $grid->updated_at(trans('admin.updated_at'))->display(function ($updated_at) {

            return  date('Y M d h:i a',strtotime($updated_at));
        });

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
        $show = new Show(Medicine::findOrFail($id));

       // $show->id('ID');
        $show->generic_name('Generic Name');
        $show->brand_name('Brand Name');
        $show->strength('Strength');
        $show->dosage_description('Dosage Description');
        $show->name_of_the_manufacturer('Name of  Manufacturer');
        $show->price('Price');
        $show->use_for('Use For');
        $show->created_at(trans('admin.created_at'))->display(function ($created_at) {

            return  date('Y M d h:i a',strtotime($created_at));
        });
        $show->updated_at(trans('admin.updated_at'))->display(function ($updated_at) {

            return  date('Y M d h:i a',strtotime($updated_at));
        });


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new Medicine);
       // $form->display('ID');
        $form->text('generic_name', 'Generic Name');
        $form->text('brand_name', 'brand_name');
        $form->text('strength', 'Strength');
        $form->text('dosage_description', 'Dosage Description');
        $form->number('price', 'Price');
        $form->select('use_for', 'Use For')->options(['Human' => 'Human', 'Veterinary' => 'Veterinary', 'R' => 'R','DC00207'=>'DC00207','DC00238'=>'DC00238']);;
        $form->text('name_of_the_manufacturer', 'Name of  Manufacturer');


        return $form;
    }
}
