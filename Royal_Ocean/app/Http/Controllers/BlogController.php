<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //All articles
    public function index() {
        return view('blog.index-blog', [
            'blog' => Blog::all()
        ]);
    }
    //Separate articles
    public function show(Blog $blogItem) {
        return view('blog.show-blogItem', [
            'blogItem' => $blogItem
        ]);
    }
}
