<?php

namespace App\Http\Controllers\backend\employee\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee\Department;
use App\Models\employee\Designation;
use App\Models\employee\Employee;
use App\Models\State;
use App\Models\Country;
use App\Models\City;
use App\Models\Employeeno;
use Config;
class EmployeeController extends Controller
{
    function __construct(){

    }

    public function list (Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Employee';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Employee';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Employee';
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
            'employeeList.js'
        );
        $data['funinit'] = array(
            'EmployeeList.list()'
        );
        $data['header'] = array(
            'title' => 'Employee',
            'breadcrumb' => array(
                'Dashboard'=> route('employee-dashboard'),
                'Employee'=> 'Employee',
            )
        );
        return view('backend.employee.pages.employee.list', $data);

    }

    public function add (Request $request){
        $objDepartment = new Department();
        $data['departmentList']  = $objDepartment->getAllDetails();
        // print_r($data);
        // die();
        // $objDesignation = new Designation();
        // $data['designation']  = $objDesignation->getAllDetails();

        $objCountry = new Country();
        $data['country'] = $objCountry->countyList();

        $objEmployeeNo = new Employeeno();
        $data['empno'] = $objEmployeeNo->getEmpNo();

        // $objState = new State();
        // $data['state'] = $objState->stateList(101);

        if ($request->isMethod('post')) {
            $obj = new Employee();
            $result  = $obj->addEmployee($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Employee add succesfully !!';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['redirect'] = route('employee');
            } else {
                if ($result == "wrong") {
                    $return['status'] = 'error';
                    $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                    $return['message'] = 'Something goes to wrong.Please try agian later';
                } else {
                    if ($result == "exits") {
                        $return['status'] = 'error';
                        $return['message'] = 'The Employee is already there.';
                        $return['redirect'] = route('employee');
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

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Employee';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Employee';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Employee';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'css/pages/wizard/wizard-3d1cf.css'
        );

        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'pages/custom/wizard/wizard-3d1cf.js'
        );

        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'employeeList.js'
        );
        $data['funinit'] = array(
            'EmployeeList.add()'
        );
        $data['header'] = array(
            'title' => 'Add Employee',
            'breadcrumb' => array(
                'Dashboard'=> route('employee-dashboard'),
                'Employee' => route('employee'),
                'Add Employee'=> 'Add Employee',
            )
        );
        return view('backend.employee.pages.employee.add', $data);

    }

    public function edit(Request $request,$id){
        $obj = new Department();
        $data['menu']  = $obj->getAllDetails();
        $obj = new Designation();
        $data['designation']  = $obj->getAllDetails();
        if ($request->isMethod('post')) {

            $obj = new Employee();
            $result = $obj->editDetail($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Employee successfully edited!';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['redirect'] = route('employee');
            } else {
                if ($result == "wrong") {
                    $return['status'] = 'error';
                    $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                    $return['message'] = 'Something goes to wrong.Please try agian later';
                } else {
                    if ($result == "exits") {
                        $return['status'] = 'error';
                        $return['message'] = 'The Employee is already there.';
                        $return['redirect'] = route('employee');
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

        $obj = new Employee();
        $data['details']  = $obj->getDetail($id);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Employee';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Employee';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Employee';
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
            'employeeList.js'
        );
        $data['funinit'] = array(
            'EmployeeList.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Employee',
            'breadcrumb' => array(
                'Dashboard' => route('employee-dashboard'),
                'Employee' => route('employee'),
                'Edit Employee' => 'Edit Employee',
            )
        );
        return view('backend.employee.pages.employee.edit', $data);
    }


    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        $session = session()->all();
        switch ($action) {
            case 'getdatatable':
                $obj = new Employee();
                $list = $obj->getdatatable();

                echo json_encode($list);
                break;

            case 'changeCountry':

                $objState = new State();
                $list = $objState->stateList(($request->input('data'))['id']);

                echo json_encode($list);
                break;
            case 'changeState':

                $objCity = new City();
                $list = $objCity->cityList(($request->input('data'))['id']);

                echo json_encode($list);
                break;
            case 'changeDepartment':

                $objobjDesignation = new Designation();
                $list = $objobjDesignation->getDetail(($request->input('data'))['id']);

                echo json_encode($list);
                break;

            case 'deleteEmployee':
                $obj = new Employee();
                $result = $obj->deleteEmployee($request->input('data'));
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Employee successfully deleted';
                    $return['redirect'] = route('employee');
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
