<?php

namespace App\Http\Controllers\frontend\contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Contactusdetails;
class ContactusController extends Controller
{
    function __construct(){

    }

    public function contactus(Request $request){

        if ($request->isMethod('post')) {
            print_r($request->input());
            die();
        }

        $objContactusdetails = new Contactusdetails();
        $data['details'] = $objContactusdetails->getDetails();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.CONTACT_US_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.CONTACT_US_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.CONTACT_US_PAGE' ) ;
        $data['css'] = array(
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'contactus.min.js'
        );
        $data['funinit'] = array(
            'Contactus.init()'
        );
        $data['header'] = array(
            'title' => 'Contact Us',
            'breadcrumb' => array()
        );
        return view('frontend.pages.contactus.contactus', $data);
    }
}
