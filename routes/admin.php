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


Route::match(['get', 'post'], 'admin-logout', ['as' => 'admin-logout', 'uses' => 'backend\LoginController@logout']);

$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    // Dashboard
    Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'backend\admin\dashboard\DashboardController@dashboard']);
    // Details
    Route::match(['get', 'post'], 'admin-details', ['as' => 'admin-details', 'uses' => 'backend\admin\details\DetailsController@details']);


    // Details
    Route::match(['get', 'post'], 'admin-contactus-details', ['as' => 'admin-contactus-details', 'uses' => 'backend\admin\contactus\ContactusController@details']);
    Route::match(['get', 'post'], 'admin-contactus-list', ['as' => 'admin-contactus-list', 'uses' => 'backend\admin\contactus\ContactusController@list']);


});
