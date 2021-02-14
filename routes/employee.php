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
});
