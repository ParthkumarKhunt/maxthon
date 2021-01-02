<?php

namespace App\Http\Controllers\frontend\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class ServicesController extends Controller
{
    //
    function __construct(){

    }

    public function services(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.SERVICES_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.SERVICES_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.SERVICES_PAGE' ) ;
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
        );
        return view('frontend.pages.services.services', $data);
    }
}
