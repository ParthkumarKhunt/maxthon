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

    Route::match(['get', 'post'], 'admin-section2', ['as' => 'admin-section2', 'uses' => 'backend\admin\section2\Section2Controller@details']);
    Route::match(['get', 'post'], 'admin-section2-ajaxaction', ['as' => 'admin-section2-ajaxaction', 'uses' => 'backend\admin\section2\Section2Controller@ajaxAction']);

    
    Route::match(['get', 'post'], 'admin-banner-section', ['as' => 'admin-banner-section', 'uses' => 'backend\admin\banner\BannerSectionController@details']);
    Route::match(['get', 'post'], 'admin-top-section', ['as' => 'admin-top-section', 'uses' => 'backend\admin\topsection\TopSectionController@details']);
   
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

//service
Route::match(['get', 'post'], 'admin-service', ['as' => 'admin-service', 'uses' => 'backend\admin\service\ServicesController@list']);
Route::match(['get', 'post'], 'admin-service-add', ['as' => 'admin-service-add', 'uses' => 'backend\admin\service\ServicesController@add']);
Route::match(['get', 'post'], 'admin-service-edit/{id}', ['as' => 'admin-service-edit', 'uses' => 'backend\admin\service\ServicesController@edit']);
Route::match(['get', 'post'], 'admin-service-ajaxaction', ['as' => 'admin-service-ajaxaction', 'uses' => 'backend\admin\service\ServicesController@ajaxAction']);


//faqs
Route::match(['get', 'post'], 'admin-faqs', ['as' => 'admin-faqs', 'uses' => 'backend\admin\faqs\FaqsController@list']);
Route::match(['get', 'post'], 'admin-faqs-add', ['as' => 'admin-faqs-add', 'uses' => 'backend\admin\faqs\FaqsController@add']);
Route::match(['get', 'post'], 'admin-faqs-edit/{id}', ['as' => 'admin-faqs-edit', 'uses' => 'backend\admin\faqs\FaqsController@edit']);
Route::match(['get', 'post'], 'admin-faqs-ajaxaction', ['as' => 'admin-faqs-ajaxaction', 'uses' => 'backend\admin\faqs\FaqsController@ajaxAction']);

    //blog
    Route::match(['get', 'post'], 'admin-blog-category', ['as' => 'admin-blog-category', 'uses' => 'backend\admin\blogcategory\BlogCategoryController@list']);
    Route::match(['get', 'post'], 'admin-blog-category-add', ['as' => 'admin-blog-category-add', 'uses' => 'backend\admin\blogcategory\BlogCategoryController@add']);
    Route::match(['get', 'post'], 'admin-blog-category-edit/{id}', ['as' => 'admin-blog-category-edit', 'uses' => 'backend\admin\blogcategory\BlogCategoryController@edit']);
    Route::match(['get', 'post'], 'admin-blog-category-ajaxaction', ['as' => 'admin-blog-category-ajaxaction', 'uses' => 'backend\admin\blogcategory\BlogCategoryController@ajaxAction']);
   
    Route::match(['get', 'post'], 'admin-blog', ['as' => 'admin-blog', 'uses' => 'backend\admin\blog\BlogController@list']);
    Route::match(['get', 'post'], 'admin-blog-add', ['as' => 'admin-blog-add', 'uses' => 'backend\admin\blog\BlogController@add']);
    Route::match(['get', 'post'], 'admin-blog-edit/{id}', ['as' => 'admin-blog-edit', 'uses' => 'backend\admin\blog\BlogController@edit']);
    Route::match(['get', 'post'], 'admin-blog-ajaxaction', ['as' => 'admin-blog-ajaxaction', 'uses' => 'backend\admin\blog\BlogController@ajaxAction']);
//career
Route::match(['get', 'post'], 'admin-department', ['as' => 'admin-department', 'uses' => 'backend\admin\department\DepartmentController@details']);
// Route::match(['get', 'post'], 'admin-department-add', ['as' => 'admin-department-add', 'uses' => 'backend\admin\department\DepartmentController@add']);
// Route::match(['get', 'post'], 'admin-department-edit/{id}', ['as' => 'admin-department-edit', 'uses' => 'backend\admin\department\DepartmentController@edit']);
Route::match(['get', 'post'], 'admin-department-ajaxaction', ['as' => 'admin-department-ajaxaction', 'uses' => 'backend\admin\department\DepartmentController@ajaxAction']);

Route::match(['get', 'post'], 'admin-carrer', ['as' => 'admin-carrer', 'uses' => 'backend\admin\career\CarrerController@list']);
Route::match(['get', 'post'], 'admin-carrer-add', ['as' => 'admin-carrer-add', 'uses' => 'backend\admin\career\CarrerController@add']);
Route::match(['get', 'post'], 'admin-carrer-edit/{id}', ['as' => 'admin-carrer-edit', 'uses' => 'backend\admin\career\CarrerController@edit']);
Route::match(['get', 'post'], 'admin-carrer-ajaxaction', ['as' => 'admin-carrer-ajaxaction', 'uses' => 'backend\admin\career\CarrerController@ajaxAction']);

Route::match(['get', 'post'], 'admin-carrer-list', ['as' => 'admin-carrer-list', 'uses' => 'backend\admin\career\CarrerController@careerList']);
  
});