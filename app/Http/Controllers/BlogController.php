<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;

    public function addBlog()
    {
        return view('add-blog');
    }
    public function newBlog(Request $request)
    {
        $this->blog          = new Blog();
        $this->blog->title    = $request->title;
        $this->blog->author   = $request->author;
        $this->blog->description  = $request->description;
        $this->blog->save();

        return redirect()->back()->with('message', 'Blog info save successfully');
    }
}
