<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;

class SiteController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('welcome2');
    }

    public function showCategory($id)
    {
        $categories = Category::all();
        $blogs = Blog::where('category_id', $id)->paginate(6);
        return view('category.show', ['blogs' => $blogs, 'categories' => $categories]);
    }

    public function showBlog($id)
    {
        $categories = Category::all();
        $blog = Blog::find($id);
        if(!isset($blog)) return view('error.404');
        return view('blog.show', ['blog' => $blog, 'categories' => $categories]);
    }
}
