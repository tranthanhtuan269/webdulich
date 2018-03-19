<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\SiteConfig;

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
}
