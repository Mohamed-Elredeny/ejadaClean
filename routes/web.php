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

Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/generalManager', function () {
    return view('generalManager.home');
});
Route::get('/QualityManager', function () {
    return view('QualityManager.home');
});
Route::get('/maintenanceManager', function () {
    return view('admin.home');
});
Route::get('/supervisor', function () {
    return view('supervisor.home');
});
Route::get('/employee', function () {
    return view('employee.home');
});

Route::get('/Tasks/show',function () {
   return view('supervisor.Tasks.index');
})->name('tasks.index');

Route::resource('supervisors','Admin\SupervisorController');
Route::resource('employees','Admin\EmployeesController');
Route::resource('teams','Admin\TeamsController');
Route::resource('sponsoringCompanies','Admin\SponsoringCompaniesController');
Route::resource('facilities','Admin\FacilitiesController');
