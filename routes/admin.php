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

    // Our Team
    Route::match(['get', 'post'], 'admin-our-team', ['as' => 'admin-our-team', 'uses' => 'backend\admin\ourteam\OurteamController@list']);
    Route::match(['get', 'post'], 'admin-our-team-add', ['as' => 'admin-our-team-add', 'uses' => 'backend\admin\ourteam\OurteamController@add']);
    Route::match(['get', 'post'], 'admin-our-team-edit/{id}', ['as' => 'admin-our-team-edit', 'uses' => 'backend\admin\ourteam\OurteamController@edit']);
    Route::match(['get', 'post'], 'admin-our-team-ajaxaction', ['as' => 'admin-our-team-ajaxaction', 'uses' => 'backend\admin\ourteam\OurteamController@ajaxAction']);

  // Our Team
  Route::match(['get', 'post'], 'admin-home-silder', ['as' => 'admin-home-silder', 'uses' => 'backend\admin\homesilder\HomeSilderController@list']);
  Route::match(['get', 'post'], 'admin-home-silder-add', ['as' => 'admin-home-silder-add', 'uses' => 'backend\admin\homesilder\HomeSilderController@add']);
  Route::match(['get', 'post'], 'admin-home-silder-edit/{id}', ['as' => 'admin-home-silder-edit', 'uses' => 'backend\admin\homesilder\HomeSilderController@edit']);
  Route::match(['get', 'post'], 'admin-home-silder-ajaxaction', ['as' => 'admin-home-silder-ajaxaction', 'uses' => 'backend\admin\homesilder\HomeSilderController@ajaxAction']);

  // Home Page Top Silder 
  Route::match(['get', 'post'], 'admin-home-service', ['as' => 'admin-home-service', 'uses' => 'backend\admin\homeservice\HomeServiceController@list']);
  Route::match(['get', 'post'], 'admin-home-service-add', ['as' => 'admin-home-service-add', 'uses' => 'backend\admin\homeservice\HomeServiceController@add']);
  Route::match(['get', 'post'], 'admin-home-service-edit/{id}', ['as' => 'admin-home-service-edit', 'uses' => 'backend\admin\homeservice\HomeServiceController@edit']);
  Route::match(['get', 'post'], 'admin-home-service-ajaxaction', ['as' => 'admin-home-service-ajaxaction', 'uses' => 'backend\admin\homeservice\HomeServiceController@ajaxAction']);



    // Our Teambackend/admin/ourclients/OurclientsController
    Route::match(['get', 'post'], 'admin-our-clients', ['as' => 'admin-our-clients', 'uses' => 'backend\admin\ourclients\OurclientsController@list']);
    Route::match(['get', 'post'], 'admin-our-clients-add', ['as' => 'admin-our-clients-add', 'uses' => 'backend\admin\ourclients\OurclientsController@add']);
    Route::match(['get', 'post'], 'admin-our-clients-edit/{id}', ['as' => 'admin-our-clients-edit', 'uses' => 'backend\admin\ourclients\OurclientsController@edit']);
    Route::match(['get', 'post'], 'admin-our-clients-ajaxaction', ['as' => 'admin-our-clients-ajaxaction', 'uses' => 'backend\admin\ourclients\OurclientsController@ajaxAction']);
  //testimonials
    Route::match(['get', 'post'], 'admin-testimonials', ['as' => 'admin-testimonials', 'uses' => 'backend\admin\testimonials\TestimonialsController@list']);
    Route::match(['get', 'post'], 'admin-testimonials-add', ['as' => 'admin-testimonials-add', 'uses' => 'backend\admin\testimonials\TestimonialsController@add']);
    Route::match(['get', 'post'], 'admin-testimonials-edit/{id}', ['as' => 'admin-testimonials-edit', 'uses' => 'backend\admin\testimonials\TestimonialsController@edit']);
    Route::match(['get', 'post'], 'admin-testimonials-ajaxaction', ['as' => 'admin-testimonials-ajaxaction', 'uses' => 'backend\admin\testimonials\TestimonialsController@ajaxAction']);

    // Details
    Route::match(['get', 'post'], 'admin-aboutus-section-one', ['as' => 'admin-aboutus-section-one', 'uses' => 'backend\admin\aboutus\AboutusController@sectionone']);
    Route::match(['get', 'post'], 'admin-aboutus-section-two', ['as' => 'admin-aboutus-section-two', 'uses' => 'backend\admin\aboutus\AboutusController@sectiontwo']);
    Route::match(['get', 'post'], 'admin-aboutus-statistical', ['as' => 'admin-aboutus-statistical', 'uses' => 'backend\admin\aboutus\AboutusController@statistical']);

    //gallery
    Route::match(['get', 'post'], 'admin-portfolio-category', ['as' => 'admin-portfolio-category', 'uses' => 'backend\admin\gallery\GallerySubController@list']);
    Route::match(['get', 'post'], 'admin-portfolio-category-add', ['as' => 'admin-portfolio-category-add', 'uses' => 'backend\admin\gallery\GallerySubController@add']);
    Route::match(['get', 'post'], 'admin-portfolio-category-edit/{id}', ['as' => 'admin-portfolio-category-edit', 'uses' => 'backend\admin\gallery\GallerySubController@edit']);
    Route::match(['get', 'post'], 'admin-portfolio-category-ajaxaction', ['as' => 'admin-portfolio-category-ajaxaction', 'uses' => 'backend\admin\gallery\GallerySubController@ajaxAction']);

    Route::match(['get', 'post'], 'admin-galleryimage', ['as' => 'admin-galleryimage', 'uses' => 'backend\admin\gallery\GalleryController@list']);
    Route::match(['get', 'post'], 'admin-galleryimage-add', ['as' => 'admin-galleryimage-add', 'uses' => 'backend\admin\gallery\GalleryController@add']);
    Route::match(['get', 'post'], 'admin-galleryimage-edit/{id}', ['as' => 'admin-galleryimage-edit', 'uses' => 'backend\admin\gallery\GalleryController@edit']);
    Route::match(['get', 'post'], 'admin-galleryimage-ajaxaction', ['as' => 'admin-galleryimage-ajaxaction', 'uses' => 'backend\admin\gallery\GalleryController@ajaxAction']);




});