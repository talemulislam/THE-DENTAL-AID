<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('appointment', AppointmentController::class)->names('appointment');
    $router->resource('appointmentStatus', AppointmentStatusController::class)->names('appointmentStatus');
    $router->resource('department', DepartmentController::class)->names('department');
    $router->resource('doctor', DoctorController::class)->names('doctor');
    $router->resource('hospital', HospitalController::class)->names('hospital');
    $router->resource('hospitalUser', HospitalUserController::class)->names('hospitalUser');
    $router->resource('medicine', MedicineController::class)->names('medicine');
    $router->resource('patient', PatientController::class)->names('patient');
    $router->resource('prescription', PrescriptionController::class)->names('prescription');
    $router->resource('home_care', HomeCareController::class)->names('home_care');
    $router->resource('habit', HabitController::class)->names('habit');
    $router->resource('medical_history', MedicalHistoryController::class)->names('medical_history');
    $router->resource('payment_status', PaymentStatusController::class)->names('payment_status');
    $router->resource('service', ServiceController::class)->names('service');
    $router->resource('schedule_date', ScheduleDateController::class)->names('schedule_date');

    $router->any('prescription/doctors_list', 'PrescriptionController@doctors_list')->name('prescription.doctors_list');

});
