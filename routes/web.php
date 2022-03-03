<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Routing\Router;
//Route::get('/', function (Router $router) {
//    $router->get('/', 'HomeController@index')->name('home');
//    //return redirect(config('admin.route.prefix').'');
//});
Route::any('/', 'HomeController@index')->name('home');
Route::any('/prescription_details/{id}', 'HomeController@prescription_details')->name('home.prescription_details');
