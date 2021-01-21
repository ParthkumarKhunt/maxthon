<?php

namespace App\Http\Controllers\frontend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Ourclients;
use App\Models\Statistical;
use App\Models\OurTeam;
use App\Models\HomeSilder;
use App\Models\HomeService;


class HomeController extends Controller
{
    //
    function __construct(){

    }

    public function home(Request $request){
        $objDetails = new Statistical();
        $data['statistical'] = $objDetails->getDetails();
        $objDetails = new Ourclients();
        $data['ourClient'] = $objDetails->getAllDetails();
        $objDetails = new OurTeam();
        $data['ourTeam'] = $objDetails->getAllDetails();
        $objDetails = new HomeSilder();
        $data['homeSlider'] = $objDetails->getAllDetails();
        $objHomeService = new HomeService();
        $data['homeService'] = $objHomeService->getAllDetails();
        // print_r($data['homeSlider']);
        // die;
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.HOME_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.HOME_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.HOME_PAGE' ) ;
        $data['css'] = array(
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'homepage.min.js'
        );
        $data['funinit'] = array(
            'Homepage.init()'
        );
        $data['header'] = array(
        );
        return view('frontend.pages.home.home', $data);
    }
}
