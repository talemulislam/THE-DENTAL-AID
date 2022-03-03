<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route ::any('prescription/doctors_list', 'Api\DoctorApiController@doctors_list')->name('prescription.doctors_list');
Route ::any('prescription/medicine_list', 'Api\DoctorApiController@medicine_list')->name('prescription.medicine_list');
Route ::any('prescription/medicine_list_load', 'Api\DoctorApiController@medicine_list_load')->name('prescription.medicine_list_load');
Route ::any('prescription/fetch_medicine', 'Api\DoctorApiController@fetch_medicine')->name('prescription.fetch_medicine');
Route ::any('prescription/make_appointment', 'Api\DoctorApiController@make_appointment')->name('prescription.make_appointment');
Route ::any('appointment/appointment_time_slot_load', 'Api\DoctorApiController@appointment_time_slot_load')->name('prescription.appointment_time_slot_load');
