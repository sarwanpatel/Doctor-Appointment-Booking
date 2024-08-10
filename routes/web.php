<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home');})->name('home');
Route::get('/team', function () { return view('home');})->name('team');
Route::get('/about', function () { return view('home');})->name('about');
Route::get('/service', function () { return view('home');})->name('service');
Route::get('/login', function () { return view('frontend/pages/login');})->name('login');
Route::get('/registration', function () { return view('frontend/pages/register');})->name('registration');



Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/after/login',[AuthController::class,'login'])->name('afterlogin');
Route::get('/after/logout',[AuthController::class,'logout'])->name('logout');


Route::group(['middleware' => 'isDoctorAdmin'], function () {
    Route::get('/super/admin', function () { return view('backend/admin');})->name('superadmin');
    Route::get('/admin/home', function () { return view('/backend/pages/home');})->name('adminhome');
    Route::get('/admin/appointment',[AppointmentController::class,'index'])->name('index');
});


// For Appointment
Route::post('/appointment',[AppointmentController::class,'appointment'])->name('appointmentbook');
Route::get('/appointment/page',[AuthController::class,'index'])->name('appointmentpage');
Route::get('/fetch-slots', [AppointmentController::class,'fetchSlot'])->name('fetch-slots');

Route::get('edit-appointment/{id}', [AppointmentController::class, 'edit'])->name('editAppointment');










