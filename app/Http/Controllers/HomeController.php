<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Helper\Helper;
use App\SiteConfig;
use Session;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/config');
    }

    public function test()
    {
        $blogs = \App\Blog::select('id')->get();
        foreach($blogs as $b){
            $blog = \App\Blog::find($b->id);
            $blog->slug = null;
            $blog->save();
        }
        $categories = \App\Category::select('id')->get();
        foreach($categories as $c){
            $category = \App\Category::find($c->id);
            $category->slug = null;
            $category->save();
        }
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        $site_config = SiteConfig::where('name', 'site_name')
                        ->update(['text' => $input['inputSiteName']]);
        $site_config = SiteConfig::where('name', 'address1')
                        ->update(['text' => $input['inputAddress1']]);
        $site_config = SiteConfig::where('name', 'address2')
                        ->update(['text' => $input['inputAddress2']]);
        $site_config = SiteConfig::where('name', 'phone1')
                        ->update(['text' => $input['inputPhone1']]);
        $site_config = SiteConfig::where('name', 'phone1')
                        ->update(['text' => $input['inputPhone1']]);
        $site_config = SiteConfig::where('name', 'phone2')
                        ->update(['text' => $input['inputPhone2']]);
        $site_config = SiteConfig::where('name', 'open_time')
                        ->update(['text' => $input['inputOpenTime']]);
        $site_config = SiteConfig::where('name', 'close_time')
                        ->update(['text' => $input['inputCloseTime']]);
                        
        return Redirect::back()->withErrors(['Record has been successfully updated!']);
        // return Redirect::back()->with('message','Record has been successfully updated!');
    }

    public function storePage(Request $request)
    {
        $input = $request->all();

        $site_config = SiteConfig::where('name', 'page_about_us')
                        ->update(['text' => Helper::removeSpace($input['page_about_us'])]);
        $site_config = SiteConfig::where('name', 'page_our_service')
                        ->update(['text' => Helper::removeSpace($input['page_our_service'])]);
        $site_config = SiteConfig::where('name', 'page_terms_and_conditions')
                        ->update(['text' => Helper::removeSpace($input['page_terms_and_conditions'])]);
        $site_config = SiteConfig::where('name', 'page_copyright')
                        ->update(['text' => Helper::removeSpace($input['page_copyright'])]);
        $site_config = SiteConfig::where('name', 'page_privacy_policy')
                        ->update(['text' => Helper::removeSpace($input['page_privacy_policy'])]);
        $site_config = SiteConfig::where('name', 'page_disclaimer')
                        ->update(['text' => Helper::removeSpace($input['page_disclaimer'])]);
                        
        return Redirect::back()->withErrors(['Record has been successfully updated!']);
    }

    public function storeSeo(Request $request)
    {
        $input = $request->all();

        $site_config = SiteConfig::where('name', 'keywords')
                        ->update(['text' => $input['keywords']]);
        $site_config = SiteConfig::where('name', 'description')
                        ->update(['text' => $input['description']]);
                        
        return Redirect::back()->withErrors(['Record has been successfully updated!']);
    }

    public function ajaxpro(Request $request){
        if(isset($_POST["image"])){
            $data = $_POST["image"];
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $imageName = time().'.png';
            $destinationPath = base_path('public/images');
            file_put_contents($destinationPath.'/'.$imageName, $data);
            return \Response::json(array('code' => '200', 'message' => 'success', 'image_url' => $imageName));
        }
        return \Response::json(array('code' => '404', 'message' => 'unsuccess', 'image_url' => ""));
    }

    public function ajaxprobackground(Request $request){
        if(isset($_POST["image"])){
            $data = $_POST["image"];
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $imageName = 'webbanner.jpg';
            $destinationPath = base_path('public/images');
            file_put_contents($destinationPath.'/'.$imageName, $data);
            return \Response::json(array('code' => '200', 'message' => 'success', 'image_url' => $imageName));
        }
        return \Response::json(array('code' => '404', 'message' => 'unsuccess', 'image_url' => ""));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request)
    {
        $input = $request->all();
        $id = $input['id'];
        SiteConfig::where('name', $id)->update(['text' => '1']);
        return Response::json(array('status' => '200', 'message' => 'success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inactive(Request $request)
    {
        $input = $request->all();
        $id = $input['id'];
        SiteConfig::where('name', $id)->update(['text' => '0']);
        return Response::json(array('status' => '200', 'message' => 'success'));
    }
}
