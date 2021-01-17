<?php

namespace App\Http\Controllers\backend\admin\ourclients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Ourclients;
class OurclientsController extends Controller
{

    function __construct()
    {

    }

    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Our Client List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Our Client List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Our Client List';
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
            'ourclients.js'
        );
        $data['funinit'] = array(
            'Ourclients.list()'
        );
        $data['header'] = array(
            'title' => 'Our Client List',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'Our Client List' => 'Our Client List',
            )
        );
        return view('backend.pages.admin.ourclients.list', $data);
    }


    public function add(Request $request){

        if ($request->isMethod('post')) {

            $objContactusdetails = new Contactusdetails();
            $result = $objContactusdetails->editDetail($request);
            if($result){
                $return['status'] = 'success';
                $return['message'] = 'Details successfully updated';
                $return['redirect'] = route('admin-contactus-details');
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['message'] = 'Something goes to wrong.Please try again';
            }
            return json_encode($return);
                exit();
        }

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Our Client List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Our Client List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Our Client List';
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
            'contactus.js'
        );
        $data['funinit'] = array(
            'Contactus.init()'
        );
        $data['header'] = array(
            'title' => 'Add Our Client List',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'Our Client List' => route('admin-our-clients'),
                'Add Our Client List' => 'Add Our Client List',
            )
        );
        return view('backend.pages.admin.ourclients.add', $data);
    }

    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        $session = session()->all();
        switch ($action) {
            case 'getdatatable':
                $objOurclients = new Ourclients();
                $list = $objOurclients->getdatatable();

                echo json_encode($list);
                break;

            case 'deleteRequestList':

                $objRequestList = new RequestList();
                $result = $objRequestList->deleteRequestList($request->input('data'));
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'User request successfully deletd';
                    $return['redirect'] = route('admin-contactus-list');
                } else {
                        $return['status'] = 'error';
                        $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                        $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
        }
    }
}
