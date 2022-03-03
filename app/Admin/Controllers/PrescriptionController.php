<?php

namespace App\Admin\Controllers;

use App\Models\Doctor;
use App\Models\Habit;
use App\Models\Medicine;
use App\Models\MedicineBD;
use App\Models\Patient;
use App\Models\PaymentStatus;
use App\Models\Prescription;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
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
            ->header('Prescription')
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
        return redirect('prescription_details/'.$id);
//        return $content
//            ->header('Prescription')
//            ->description('Details')
//            ->body($this->detail($id));
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
            ->header('Prescription')
            ->description('Edit')
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
        //   var_dump('test');
        return $content
            ->header('Prescription')
            ->description('Create')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Prescription);
        $user = Auth::guard('admin')->user();
        $grid->id('ID');
        $grid->patient('Patient')->name();
        $grid->doctor('Doctor')->name();
        $grid->weight('weight');
        $grid->height('height');
        $grid->pressure('pressure');
        $grid->puls_rate('puls_rate');
        $grid->any_special_issue('any_special_issue');
        $grid->total_bill('Total Bill');
        $arr_payment_status = array();
        $payment_status = PaymentStatus::all();
        foreach ($payment_status as $key => $value) {
            $arr_payment_status[$value['id']] = $value['name'];
        }
        $grid->payment_status('Payment_status')->editable('select',$arr_payment_status);

//        $grid->id('View')->display(function ($id) use ($grid) {
//
//                return '<a style="max-width:100px; overflow:auto;word-wrap: break-word;" href="/prescription_details/' . $id . '" target="_blank"> View</a>';
//
//
//        });
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));
        $grid->next_visit_date('next_visit_date');
        $grid->actions(function ($actions) {
           // $actions->disableEdit();
            $actions->prepend('<a title="Details" href="prescription_details/' . $actions->getkey() . '"></a>');
           // $actions->disableView();
        });
        if ($user->isRole('user')){
            $ids=Patient::where('admin_user_id','=',$user->id)->select('id')->get();
            $id='0';
            foreach ($ids as $val){

                $id=$val->id.','.$id;
            }
            $grid->model()->whereIn('patient_id', [$id]);
           // $grid->disableActions();
            $grid->disableCreateButton();
            $grid->disablePagination();
            $grid->disableFilter();
            $grid->disableExport();
            $grid->actions(function ($actions) {
                 $actions->disableEdit();
                 $actions->disableDelete();

                // $actions->disableView();
            });
            //$actions->disableEdit();
        }elseif ($user->isRole('doctor')){
            $login_doctor = Doctor::where('admin_user_id', '=', $user->id)->first();
           // dd($login_doctor);
            $grid->model()->whereIn('doctor_id', [$login_doctor->id]);
        }else{
            $grid->actions(function ($actions) {

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
        $show = new Show(Prescription::findOrFail($id));

        $show->id('ID');
        $show->patient_id('patient_id');
        $show->doctor_id('doctor_id');
        $show->disease('disease');

        $show->problem_details()->unescape()->as(function ($table) {
            // dd(array_keys($table[0]));
            $html = "<table class='table table-bordered '><thead><tr>";
            $keys = array_keys($table[0]);
            foreach (array_keys($table[0]) as $th) {
                $html .= "<th>" . $th . " </th>";
            }

            $html .= "</tr></thead><tbody>";

            foreach ($table as $row) {
                $html .= "<tr>";
                foreach ($row as $col) {
                    $html .= "<td>" . $col . " </td>";
                }
                $html .= "</tr>";
            }
            $html .= "</tbody></table>";
            return $html;

        });
        $show->test_details('test_details');
        $show->medicine_details('medicine_details');
        $show->next_visit_date('next_visit_date');
        $show->instruction_details('instruction_details');
        $show->next_test_details('next_test_details');
        $show->weight('weight');
        $show->height('height');
        $show->pressure('pressure');
        $show->puls_rate('puls_rate');
        $show->any_special_issue('any_special_issue');
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
        $form = new Form(new Prescription);
        $user = Auth::guard('admin')->user();
        $arr_doctor = array();
        $doctor = Doctor::all();
        foreach ($doctor as $key => $value) {
            $arr_doctor[$value['id']] = $value['name'];
        }
        if ($user->isRole('doctor')) {
            $login_doctor = Doctor::where('admin_user_id', '=', $user->id)->first();
            $form->hidden('doctor_id')->default($login_doctor->id);
        } else {
            $form->select('doctor_id', 'Doctor')->options($arr_doctor);
        }

        $arr_patient = array();
        $patient = Patient::all();
        foreach ($patient as $key => $value) {
            $arr_patient[$value['id']] = $value['name'] . ' ( ' . $value['phone'] . ' )';
        }
        $form->select('patient_id', 'Patient Name')->options($arr_patient);

        $form->divider();
        $form->text('weight', 'Weight')->help('ex- 80kg, 70kg or 170lbs, 150lbs  etc.');
        $form->text('height', 'Height')->help('ex- 177cm,160cm or 5feet 10 inches, 5 feet 2 inches or 70 inches,60 inches etc.');
        $form->text('pressure', 'Blood Pressure');
        $form->text('puls_rate', 'Puls Rate');
        $form->text('bmi', 'BMI')->help('Body Mass Index');
        $form->text('bsa', 'BSA')->help('Body Surface Area ');
        $form->text('spo2', 'SPO2')->help('Oxygen saturation');

        $form->ckeditor('disease', 'Complaints about Disease');
        $form->text('any_special_issue', 'Any Special Issue');

        $arr_medicine = array();
        $medicine = Medicine::select('generic_name')->groupBy('generic_name')->orderBy('generic_name','asc')->get();
        foreach ($medicine as $key => $value) {
            $arr_medicine[$value['generic_name']] = $value['generic_name'];
        }
        if ($user->isRole('doctor')||$user->isRole('administrator')) {
            $form->hasMany('test_details', 'Test Details', function (Form\NestedForm $form) {
            $form->text('service_name', 'Service Name');
            $form->text('remarks', 'Remarks');
        });
            $form->hasMany('medicine_details', 'Medicine  Details', function (Form\NestedForm $form) use ($arr_medicine) {

                $form->select('generic_name', 'Generic Name')->options($arr_medicine)->load('brand_name','/api/prescription/medicine_list_load');
                $form->select('brand_name', 'Brand Name');
                $form->textarea('dose', 'Dose')->rows(1)->help('1+0+1 or 1+1+1 etc.');
                $form->textarea('duration', 'Duration')->rows(1)->help(' ex- 7days/continue etc.');
                $form->textarea('remarks', 'Remarks')->rows(1)->help('Any instruction like, Before meal, After meal etc.');
            });
            $form->date('next_visit_date', 'next_visit_date');
            $form->textarea('instruction_details', 'Instruction Details')->rows(2)->help('Medicine as advised. ');
            $form->textarea('next_test_details', 'Next Test Details')->rows(2)->help(' Follow up after two months with CBC test.');

        }
        $form->decimal('total_bill', 'Total Bill')->help('Total Bill amount. Consultancy charge, medicine charge, surgery charge etc. ');
        $form->select('payment_status','Payment Status')->options(PaymentStatus::all()->pluck('name', 'id'));
       // $form->display(trans('admin.created_at'));
        //$form->display(trans('admin.updated_at'));
        $script = <<<SCRIPT
<script>

                function fetch_medicine_data(data) {
//console.log(data);
    var query = data.value;
    var name=data.name;
   // console.log(name);
    if (query != '') {
        $.ajax({
            url: "/api/prescription/medicine_list",
            method: "POST",
            data: {query: query},
            success: function (data) {
                $('.countryList').fadeIn();
                $('.countryList').html(data);
                        $(document).on('click', 'li', function () {
        $('input[name="'+name+'"]').val($(this).text());
        //$('#country_name').val($(this).text());
            console.log(name);
        $('.countryList').fadeOut();
    });
            }
        });
    }

}

                </script>
SCRIPT;
        $form->html($script);
        return $form;
    }

    public function doctors_list(Request $request)
    {

        $q = $request->get('q');
        return Doctor::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
}
