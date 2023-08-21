<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Admin\Blog\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', Blog::ACTIVE)->latest()->get();
        return view('website.blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('website.blog.show', compact('blog'));
    }
}