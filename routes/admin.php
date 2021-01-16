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
    Route::match(['get', 'post'], 'admin-contactus-list-ajaxaction', ['as' => 'admin-contactus-list-ajaxaction', 'uses' => 'backend\admin\contactus\ContactusController@ajaxAction']);

    // Details
    Route::match(['get', 'post'], 'admin-aboutus-section-one', ['as' => 'admin-aboutus-section-one', 'uses' => 'backend\admin\aboutus\AboutusController@sectionone']);
    Route::match(['get', 'post'], 'admin-aboutus-section-two', ['as' => 'admin-aboutus-section-two', 'uses' => 'backend\admin\aboutus\AboutusController@sectiontwo']);
    Route::match(['get', 'post'], 'admin-aboutus-statistical', ['as' => 'admin-aboutus-statistical', 'uses' => 'backend\admin\aboutus\AboutusController@statistical']);
});
