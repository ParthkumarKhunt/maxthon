<?php

namespace App\Http\Controllers\backend\admin\details;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Details;

class DetailsController extends Controller
{
    function __construct(){

    }

    public function list (Request $request){
        if ($request->isMethod('post')) {
            $objDetails = new Details();
            $result  = $objDetails->updateDetails($request);
            if($result){
                $return['status'] = 'success';
                $return['message'] = 'Details updated succesfully !!';
                $return['jscode'] = '$(".submitbtn:visible").attr("disabled","disabled");$("#loader").show();';
                $return['redirect'] = route('admin-details');
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['message'] = 'Something goes to wrong.Please try agian later';
            }
            return json_encode($return);
                exit();
        }

        $objDetails = new Details();
        $data['details']  = $objDetails->getDetails();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Details';
        $data['css'] = array(
            'toastr/toastr.min.css'
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
            'details.js'
        );
        $data['funinit'] = array(
            'Details.init()'
        );
        $data['header'] = array(
            'title' => 'Details',
            'breadcrumb' => array(
                'Dashboard'=> route('admin-dashboard'),
                'Details'=> 'Details',
            )
        );
        return view('backend.pages.admin.details.list', $data);

    }
}
