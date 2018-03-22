<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\SiteConfig;
use Session;

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

    public function store(Request $request)
    {
        $input = $request->all();
        
        if(isset($input['inputSiteName']) && strlen($input['inputSiteName']) > 0){
            $site_config = SiteConfig::where('name', 'site_name')
                            ->update(['text' => $input['inputSiteName']]);
        }
        if(isset($input['inputAddress1']) && strlen($input['inputAddress1']) > 0){
            $site_config = SiteConfig::where('name', 'address1')
                            ->update(['text' => $input['inputAddress1']]);
        }
        if(isset($input['inputAddress2']) && strlen($input['inputAddress2']) > 0){
            $site_config = SiteConfig::where('name', 'address2')
                            ->update(['text' => $input['inputAddress2']]);
        }
        if(isset($input['inputPhone1']) && strlen($input['inputPhone1']) > 0){
            $site_config = SiteConfig::where('name', 'phone1')
                            ->update(['text' => $input['inputPhone1']]);
        }
        if(isset($input['inputPhone1']) && strlen($input['inputPhone1']) > 0){
            $site_config = SiteConfig::where('name', 'phone1')
                            ->update(['text' => $input['inputPhone1']]);
        }
        if(isset($input['inputPhone2']) && strlen($input['inputPhone2']) > 0){
            $site_config = SiteConfig::where('name', 'phone2')
                            ->update(['text' => $input['inputPhone2']]);
        }
        if(isset($input['inputOpenTime']) && strlen($input['inputOpenTime']) > 0){
            $site_config = SiteConfig::where('name', 'open_time')
                            ->update(['text' => $input['inputOpenTime']]);
        }
        if(isset($input['inputCloseTime']) && strlen($input['inputCloseTime']) > 0){
            $site_config = SiteConfig::where('name', 'close_time')
                            ->update(['text' => $input['inputCloseTime']]);
        }
        return Redirect::back()->withErrors(['Record has been successfully updated!']);
        // return Redirect::back()->with('message','Record has been successfully updated!');
    }

    public function getImageForm()
    {
        return view('imageform');
    }

    public function postImageForm(Request $request){
        $rules = array(
            'image' => 'required|mimes:jpeg,jpg|max:10000'
        );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::to('getJCrop')->withErrors($validation);
        }
        else
        {
            $file = Input::file('image');
            $file_name = $file->getClientOriginalName();
            // dd(url('/').'/public/images/blogs/');
            if ($file->move(url('/').'/public/images/', $file_name))
            {
                return Redirect::to('getJCrop')->with('image',$file_name);
            }
            else
            {
                return "Error uploading file";
            }
        }
    }

    public function getJCrop()
    {
        return view('getJCrop')->with('image', url('/').'/public/images/'. Session::get('image'));
    }

    public function postJCrop(){
        $quality = 90;

        $src  = Input::get('image');
        $img  = imagecreatefromjpeg($src);
        $dest = ImageCreateTrueColor(Input::get('w'),
            Input::get('h'));

        imagecopyresampled($dest, $img, 0, 0, Input::get('x'),
            Input::get('y'), Input::get('w'), Input::get('h'),
            Input::get('w'), Input::get('h'));
        imagejpeg($dest, $src, $quality);

        return "<img src='" . $src . "'>";
    }
}
