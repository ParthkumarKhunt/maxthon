<?php

namespace App\Http\Controllers\frontend\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Blog;
class BlogController extends Controller
{
    //
    function __construct(){

    }
    
    
    public function blog(Request $request){
        $objDetails = new Blog();
        $data['blog'] = $objDetails->getAllDetails();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'title.BLOG_PAGE' ) ;
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'description.BLOG_PAGE' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || '. Config::get( 'keywords.BLOG_PAGE' ) ;
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
            'title' => 'Blog',
            'breadcrumb' => array()
        );
        return view('frontend.pages.blog.blog', $data);
    }
}
