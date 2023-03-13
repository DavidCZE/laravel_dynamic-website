<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //All articles
    public function index() {
        return view('blog.index-blog', [
            'blog' => Blog::latest()->paginate(6)
        ]);
    }
    //Separate articles
    public function show(Blog $blogItem) {
        return view('blog.show-blogItem', [
            'blogItem' => $blogItem
        ]);
    }

    //Create form
    public function create() {
        return view('blog.create-blog');
    }

    //Uložit Article data
    public function store(Request $request) {
        $formFieldsBlog = $request->validate([
            'nazev' => 'required',
            'obsah' => 'required',
            
        ]);
        
        Blog::create($formFieldsBlog);

        return redirect('/blog')->with('message', 'Článek přidán');
    }

}
