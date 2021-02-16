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


$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['employee']], function() {
    // Dashboard
    Route::match(['get', 'post'], 'employee-dashboard', ['as' => 'employee-dashboard', 'uses' => 'backend\employee\dashboard\DashboardController@dashboard']);

     // Employee List
     Route::match(['get', 'post'], 'employee', ['as' => 'employee', 'uses' => 'backend\employee\employee\EmployeeController@list']);
     Route::match(['get', 'post'], 'employee-add', ['as' => 'employee-add', 'uses' => 'backend\employee\employee\EmployeeController@add']);
     Route::match(['get', 'post'], 'employee-edit/{id}', ['as' => 'employee-edit', 'uses' => 'backend\employee\employee\EmployeeController@edit']);
     Route::match(['get', 'post'], 'employee-ajaxaction', ['as' => 'employee-ajaxaction', 'uses' => 'backend\employee\employee\EmployeeController@ajaxAction']);

     // department  List
     Route::match(['get', 'post'], 'employee-department', ['as' => 'employee-department', 'uses' => 'backend\employee\department\DepartmentController@list']);
     Route::match(['get', 'post'], 'employee-department-add', ['as' => 'employee-department-add', 'uses' => 'backend\employee\department\DepartmentController@add']);
     Route::match(['get', 'post'], 'employee-department-edit/{id}', ['as' => 'employee-department-edit', 'uses' => 'backend\employee\department\DepartmentController@edit']);
     Route::match(['get', 'post'], 'employee-department-ajaxaction', ['as' => 'employee-department-ajaxaction', 'uses' => 'backend\employee\department\DepartmentController@ajaxAction']);

     // Department  List
     Route::match(['get', 'post'], 'employee-designation', ['as' => 'employee-designation', 'uses' => 'backend\employee\designation\DesignationController@list']);
     Route::match(['get', 'post'], 'employee-designation-add', ['as' => 'employee-designation-add', 'uses' => 'backend\employee\designation\DesignationController@add']);
     Route::match(['get', 'post'], 'employee-designation-edit/{id}', ['as' => 'employee-designation-edit', 'uses' => 'backend\employee\designation\DesignationController@edit']);
     Route::match(['get', 'post'], 'employee-designation-ajaxaction', ['as' => 'employee-designation-ajaxaction', 'uses' => 'backend\employee\designation\DesignationController@ajaxAction']);

});
