<?php

namespace App\Http\Controllers\frontend\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class GalleryController extends Controller
{
    //
    function __construct(){

    }

    public function gallery(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.GALLERY_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.GALLERY_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.GALLERY_PAGE' ) ;
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
        return view('frontend.pages.gallery.gallery', $data);
    }
}
