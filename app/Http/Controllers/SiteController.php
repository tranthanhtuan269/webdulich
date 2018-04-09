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
        $category = Category::find($id);
        $blogs = Blog::where('category_id', $id)->paginate(6);
        return view('category.show', ['blogs' => $blogs, 'categories' => $categories, 'category' => $category]);
    }

    public function showBlog($id)
    {
        $categories = Category::all();
        $blog       = Blog::find($id);
        $blogs      = Blog::where('active', 1)
                        ->select('id', 'title', 'image', 'slug')
                        ->take(10)->orderBy('id', 'desc')->get();
                        
        if(!isset($blog)) return view('error.404');
        return view('blog.show', ['blog' => $blog, 'blogs' => $blogs, 'categories' => $categories]);
    }

    public function showCategorySlug($id, $slug)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $blogs = Blog::where('category_id', $id)->paginate(6);
        return view('category.show', ['blogs' => $blogs, 'categories' => $categories, 'category' => $category]);
    }

    public function showBlogSlug($id, $slug)
    {
        $categories = Category::all();
        $blog       = Blog::find($id);
        $blogs      = Blog::where('active', 1)
                        ->select('id', 'title', 'image', 'slug')
                        ->take(10)->orderBy('id', 'desc')->get();

        if(!isset($blog)) return view('error.404');
        return view('blog.show', ['blog' => $blog, 'blogs' => $blogs, 'categories' => $categories]);
    }
}
