<?php

namespace App\Http\Controllers\backend\admin\contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Maildetails;

class ContactusController extends Controller
{
    function __construct(){

    }

    public function list (Request $request){
        if ($request->isMethod('post')) {
            $objMaildetails = new Maildetails();
            $result  = $objMaildetails->updateDetails($request);
            if($result){
                $return['status'] = 'success';
                $return['message'] = 'Details updated succesfully !!';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                // $return['redirect'] = route('admin-contact-us');
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['message'] = 'Something goes to wrong.Please try agian later';
            }
            return json_encode($return);
            exit();
        }

        $objMaildetails = new Maildetails();
        $data['details']  = $objMaildetails->getDetails();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Contact Us details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Contact Us details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Contact Us details';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(

        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'plugins/custom/datatables/datatables.bundle.js',
            'pages/crud/datatables/basic/scrollable.js'
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
            'title' => 'Contact Us details',
            'breadcrumb' => array(
                'Dashboard'=> route('admin-dashboard'),
                'Contact Us details'=> 'Contact-us details',
            )
        );
        return view('backend.pages.admin.contactus.list', $data);

    }
}
