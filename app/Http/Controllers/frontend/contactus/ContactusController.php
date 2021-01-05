<?php

namespace App\Http\Controllers\frontend\contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class ContactusController extends Controller
{
    function __construct(){

    }

    public function contactus(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.CONTACT_US_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.CONTACT_US_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.CONTACT_US_PAGE' ) ;
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
        return view('frontend.pages.contactus.contactus', $data);
    }
}
