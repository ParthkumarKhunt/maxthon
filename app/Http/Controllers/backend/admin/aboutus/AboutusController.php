<?php

namespace App\Http\Controllers\backend\admin\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class AboutusController extends Controller
{
    //
    function __construct()
    {

    }

    public function sectionone(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us Section';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us Section';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us Section';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'plugins/custom/ckeditor/ckeditor-classic.bundled1cf.js',
            'pages/crud/forms/editors/ckeditor-classicd1cf.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'aboutus.js'
        );
        $data['funinit'] = array(
            'Aboutus.one()'
        );
        $data['header'] = array(
            'title' => 'About Us Section',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'About Us Section' => 'About Us Section',
            )
        );
        return view('backend.pages.admin.aboutus.sectionone', $data);
    }
    public function sectiontwo(Request $request){


        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us Section';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us Section';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us Section';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'plugins/custom/ckeditor/ckeditor-classic.bundled1cf.js',
            'pages/crud/forms/editors/ckeditor-classicd1cf.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'aboutus.js'
        );
        $data['funinit'] = array(
            'Aboutus.one()'
        );
        $data['header'] = array(
            'title' => 'About Us Section',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'About Us Section' => 'About Us Section',
            )
        );
        return view('backend.pages.admin.aboutus.sectiontwo', $data);
    }
}
