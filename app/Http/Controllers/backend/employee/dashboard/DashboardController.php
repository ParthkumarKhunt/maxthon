<?php

namespace App\Http\Controllers\backend\employee\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class DashboardController extends Controller
{
    function __construct(){

    }

    public function dashboard (Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Employee Dashboard';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Employee Dashboard';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Employee Dashboard';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'toastr/toastr.min.js',
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'employeedashboard.js'
        );
        $data['funinit'] = array(
            'Dashboard.init()'
        );
        $data['header'] = array(
            'title' => 'Employee dashboard',
            'breadcrumb' => array()
        );
        return view('backend.employee.pages.dashboard.dashboard', $data);

    }
}
