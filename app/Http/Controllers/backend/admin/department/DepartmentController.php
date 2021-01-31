<?php

namespace App\Http\Controllers\backend\admin\department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

use Config;
class DepartmentController extends Controller
{
    function __construct(){

    }

    public function list (Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Department';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Department';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Department';
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
            'department.js'
        );
        $data['funinit'] = array(
            'Department.list()'
        );
        $data['header'] = array(
            'title' => 'Department',
            'breadcrumb' => array(
                'Dashboard'=> route('admin-dashboard'),
                'Department'=> 'Department',
            )
        );
        return view('backend.pages.admin.department.list', $data);

    }
    public function add (Request $request){
         if ($request->isMethod('post')) {
            $obj = new Department();
            $result  = $obj->addSubmenu($request->post('name'));
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Department add succesfully !!';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['redirect'] = route('admin-department');
            } else {
                if ($result == "wrong") {
                    $return['status'] = 'error';
                    $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                    $return['message'] = 'Something goes to wrong.Please try agian later';
                } else {
                    if ($result == "exits") {
                        $return['status'] = 'error';
                        $return['message'] = 'The Department is already there.';
                        $return['redirect'] = route('admin-department');
                    } else {
                        $return['status'] = 'error';
                        $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                        $return['message'] = 'Something goes to wrong.Please try agian later';

                    }
                }
            }
            echo json_encode($return);
            exit;
        }

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Department';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Department';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Department';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(

        );

        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'pages/crud/file-upload/image-inputd1cf.js'
        );

        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'department.js'
        );
        $data['funinit'] = array(
            'Department.add()'
        );
        $data['header'] = array(
            'title' => 'Add Department',
            'breadcrumb' => array(
                'Dashboard'=> route('admin-dashboard'),
                'Department' => route('admin-department'),
                'Add Department'=> 'Add Department',
            )
        );
        return view('backend.pages.admin.department.add', $data);

    }
    public function edit(Request $request,$id){

        if ($request->isMethod('post')) {

            $obj = new Department();
            $result = $obj->editDetail($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Department successfully edited!';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['redirect'] = route('admin-department');
            } else {
                if ($result == "wrong") {
                    $return['status'] = 'error';
                    $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                    $return['message'] = 'Something goes to wrong.Please try agian later';
                } else {
                    if ($result == "exits") {
                        $return['status'] = 'error';
                        $return['message'] = 'The Department is already there.';
                        $return['redirect'] = route('admin-department');
                    } else {
                        $return['status'] = 'error';
                        $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                        $return['message'] = 'Something goes to wrong.Please try agian later';

                    }
                }
            }
            return json_encode($return);
                exit();
        }

        $obj = new Department();
        $data['details']  = $obj->getDetail($id);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Department';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Department';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Department';
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
            'department.js'
        );
        $data['funinit'] = array(
            'Department.add()'
        );
        $data['header'] = array(
            'title' => 'Edit Department',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'Department' => route('admin-department'),
                'Edit Department' => 'Edit Department',
            )
        );
        return view('backend.pages.admin.department.edit', $data);
    }
    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        $session = session()->all();
        switch ($action) {
            case 'getdatatable':
                $obj = new Department();
                $list = $obj->getdatatable();

                echo json_encode($list);
                break;

            case 'deleteDepartment':
                $obj = new Department();
                $result = $obj->deleteDepartment($request->input('data'));
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Department successfully deleted';
                    $return['redirect'] = route('admin-department');
                } else {
                        $return['status'] = 'error';
                        $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                        $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
                case 'deleteSkills':
                    $obj = new Skills();
                    $result = $obj->deleteSkills($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Department successfully deleted';
                        $return['redirect'] = route('admin-department');
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
