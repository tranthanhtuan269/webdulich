<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Service;
use App\Helper\Helper;
use Response;
use DB;

class ServiceController extends Controller
{

    public $iconList = ['car', 'motorcycle', 'bicycle', 'life-ring', 'plane', 'utensils', 'birthday-cake'];
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = DB::table('services')->paginate(15);
        return view('service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create', ['iconList' => $this->iconList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/services')
                ->withInput()
                ->withErrors($validator);
        }

        $service                = new Service;
        $service->name          = $request->name;
        $service->image         = $request->image;
        $service->icon          = $request->icon;
        $service->sub_content   = Helper::removeSpace($request->sub_content);
        $service->content       = Helper::removeSpace($request->content);
        $service->save();

        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        if(!isset($service)) return view('error.404');
        return view('service.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        if(!isset($service)) return view('error.404');
        return view('service.edit', ['service' => $service, 'iconList' => $this->iconList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        // dd($input);
        unset($input['_method']);
        unset($input['_token']);
        unset($input['image-img']);
        $input['sub_content']   = Helper::removeSpace($input['sub_content']);
        $input['content']       = Helper::removeSpace($input['content']);
        Service::where('id', $id)->update($input);

        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/services');
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
        Service::where('id', $id)->update(['active' => 1]);
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
        Service::where('id', $id)->update(['active' => 0]);
        return Response::json(array('status' => '200', 'message' => 'success'));
    }
}
