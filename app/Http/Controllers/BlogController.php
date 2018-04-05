<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use App\Helper\Helper;
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
        $blogs = DB::table('blogs')->orderby('id', 'desc')->paginate(15);
        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->where('active', 1)->pluck('name', 'id');
        return view('blog.create', ['categories' => $categories]);
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
            'title' => 'required|max:255',
            'image' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/blogs/create')
                ->withInput()
                ->withErrors($validator);
        }

        $sub_content    = Helper::removeSpace($request->sub_content);
        $content        = Helper::removeSpace($request->content);

        $blog = new Blog;
        $blog->title        = $request->title;
        $blog->image        = $request->image;
        $blog->sub_content  = $sub_content;
        $blog->content      = $content;
        $blog->category_id  = $request->category_id;
        $blog->keyword      = $request->keyword;
        $blog->created_at   = date("Y-m-d H:i:s");
        $blog->updated_at   = date("Y-m-d H:i:s");

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
        $categories = Category::where('active', 1)->get();
        if(!isset($blog)) return view('error.404');
        return view('blog.show', ['blog' => $blog, 'categories' => $categories]);
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
        $sub_content    = Helper::removeSpace($blog->sub_content);
        $content        = Helper::removeSpace($blog->content);
        Blog::where('id', $id)
            ->update([
                'sub_content'   => $sub_content,
                'content'       => $content
            ]);
        $blog = Blog::find($id);
        $categories = DB::table('categories')->where('active', 1)->pluck('name', 'id');
        if(!isset($blog)) return view('error.404');
        return view('blog.edit', ['blog' => $blog,'categories' => $categories]);
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
        $sub_content    = Helper::removeSpace($input['sub_content']);
        $content        = Helper::removeSpace($input['content']);
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
                'updated_at'    => date("Y-m-d H:i:s"),
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
