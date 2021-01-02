<?php

namespace App\Http\Controllers\backend\admin\socialmedia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\SocialMedia;

class SocialmediaController extends Controller
{
    function __construct(){

    }

    public function list (Request $request){
        if ($request->isMethod('post')) {
            $objSocialMedia = new SocialMedia();
            $result  = $objSocialMedia->updateDetails($request);
            if($result){
                $return['status'] = 'success';
                $return['message'] = 'Social media details updated succesfully !!';
                $return['jscode'] = '$(".submitbtn:visible").attr("disabled","disabled");$("#loader").show();';
                $return['redirect'] = route('admin-social-media');
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['message'] = 'Something goes to wrong.Please try agian later';
            }
            return json_encode($return);
                exit();
        }
        $objSocialMedia = new SocialMedia();
        $data['details']  = $objSocialMedia->getDetails();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Social Media List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Social Media List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Social Media List';
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
            'socialmedia.js'
        );
        $data['funinit'] = array(
            'Socialmedia.init()'
        );
        $data['header'] = array(
            'title' => 'Social Media Details',
            'breadcrumb' => array(
                'Dashboard'=> route('admin-dashboard'),
                'Social Media Details'=> 'Social Media Details',
            )
        );
        return view('backend.pages.admin.socialmedia.list', $data);

    }
}
