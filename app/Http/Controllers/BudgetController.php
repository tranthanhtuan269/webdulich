<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Budget;
use Response;
use DB;

class BudgetController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = DB::table('budgets')->paginate(15);
        return view('budget.index', ['budgets' => $budgets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budget.create');
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
            return redirect('/budgets')
                ->withInput()
                ->withErrors($validator);
        }

        $budget = new budget;
        $budget->name = $request->name;
        $budget->save();

        return redirect('/budgets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budget = Budget::find($id);
        if(!isset($budget)) return view('error.404');
        return view('budget.show', ['budget' => $budget]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = Budget::find($id);
        if(!isset($budget)) return view('error.404');
        return view('budget.edit', ['budget' => $budget]);
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
        $name = $input['name'];
        Budget::where('id', $id)->update(['name' => $name]);

        return redirect('/budgets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budget = Budget::find($id);
        $budget->delete();
        return redirect('/budgets');
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
        Budget::where('id', $id)->update(['active' => 1]);
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
        Budget::where('id', $id)->update(['active' => 0]);
        return Response::json(array('status' => '200', 'message' => 'success'));
    }
}
