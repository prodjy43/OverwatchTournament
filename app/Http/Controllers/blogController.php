<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class blogController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->orderBy('id_news', 'desc')->get();
        return view('blog.index', ['news' => $news]);
    }

    public function show($slug)
    {
        $post = News::where('slug', '=', $slug)->first();
        return view('blog.show', ['post' => $post]);
    }
}
