<?php

namespace App\Http\Controllers\backend\admin\ourteam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class OurteamController extends Controller
{
    function __construct()
    {

    }

    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Our Team List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Our Team List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Our Team List';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'plugins/custom/datatables/datatables.bundled1cf.css'
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'plugins/custom/datatables/datatables.bundled1cf.js',
            'pages/crud/datatables/data-sources/htmld1cf.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'ourteam.js'
        );
        $data['funinit'] = array(
            'Ourteam.list()'
        );
        $data['header'] = array(
            'title' => 'Our Team List',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'Our Team List' => 'Our Team List',
            )
        );
        return view('backend.pages.admin.ourclients.list', $data);
    }
}
