<?php

use Illuminate\Support\Facades\Route;


use App\http\Controllers\indexController;
use App\http\Controllers\aboutController;
use App\http\Controllers\adminController;
use App\http\Controllers\serviceController;
use App\http\Controllers\priceController;
use App\http\Controllers\contactController;
use App\http\Controllers\appointmentController;
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
Route::get('/', [indexController::class, 'index']) -> name ('index');
Route::get('/appointment', [appointmentController::class, 'index']);
Route::get('/about', [aboutController::class, 'index']) -> name ('about');
Route::get('/admin', [adminController::class, 'index']) -> name ('admin');
Route::get('/service', [serviceController::class, 'index']) -> name ('service');
Route::get('/price', [priceController::class, 'index']) -> name ('price');
Route::get('/contact', [contactController::class, 'index']) -> name ('contact');

Route::post('/appointment', [appointmentController::class, 'appointment']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
