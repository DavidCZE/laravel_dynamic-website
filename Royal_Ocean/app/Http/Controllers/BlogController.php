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

    //Edit form
    public function edit(Blog $blogItem) {
        return view('blog.edit-blogItem', ['blogItem' => $blogItem]);
    }

    //Update
    public function update(Request $request, Blog $blogItem) {
        $formFields = $request->validate([
            'nazev' => 'required',
            'obsah' => 'required'
        ]);

        $blogItem->update($formFields);

        return redirect('/blog/manage')->with('message', 'Článek upraven');
    }

    //Vymazat blogItem
    public function delete(Blog $blogItem) {
        $blogItem->delete();
        return redirect('/blog/manage')->with('message', 'Článek byl smazán');
    }

    //Manage blogItems
    public function manage() {
        return view('blog.manage-blog', ['blog' => Blog::all()]);
    }
}
