<?php

namespace App\Http\Controllers\frontend\career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Department;
use App\Models\Carrer;

class CareerController extends Controller
{
    function __construct(){

    }

    public function career(Request $request){
        $objDetails = new Department();
        $data['menu'] = $objDetails->getAllDetails();

        $objDetails = new Carrer();
        $data['carrer'] = $objDetails->getAllDetails();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.CAREER_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.CAREER_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.CAREER_PAGE' ) ;
        $data['css'] = array(
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
        );
        $data['funinit'] = array(
        );
        $data['header'] = array(
            'title' => 'Career',
            'breadcrumb' => array()
        );
        return view('frontend.pages.career.career', $data);
    }
}
