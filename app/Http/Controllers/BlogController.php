<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Blog;
use Response;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->paginate(15);
        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/blogs')
                ->withInput()
                ->withErrors($validator);
        }

        $blog = new blog;
        $blog->title        = $request->title;
        $blog->image        = $request->image;
        $blog->sub_content  = $request->sub_content;
        $blog->content      = $request->content;
        $blog->category_id  = $request->category_id;
        $blog->keyword      = $request->keyword;
        $blog->save();

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        if(!isset($blog)) return view('error.404');
        return view('blog.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        if(!isset($blog)) return view('error.404');
        return view('blog.edit', ['blog' => $blog]);
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

        $title          = $input['title'];
        $image          = $input['image'];
        $sub_content    = $input['sub_content'];
        $content        = $input['content'];
        $category_id    = $input['category_id'];
        $keyword        = $input['keyword'];

        Blog::where('id', $id)
            ->update([
                'title'         => $title, 
                'image'         => $image,
                'sub_content'   => $sub_content,
                'content'       => $content,
                'category_id'   => $category_id,
                'keyword'       => $keyword,
            ]);

        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blogs');
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
        Blog::where('id', $id)->update(['active' => 1]);
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
        Blog::where('id', $id)->update(['active' => 0]);
        return Response::json(array('status' => '200', 'message' => 'success'));
    }
}
