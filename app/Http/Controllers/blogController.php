<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;

class blogController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
        return view('blog.index', ['news' => $news]);
    }

    public function show($slug)
    {
        $post = News::where('slug', '=', $slug)->first();
        return view('blog.show', ['post' => $post]);
    }

    public function searchTag($name){
        $tag = Tag::where('name', '=', $name)->first();
        if(!empty($tag)){
            $news = $tag->news;
            $tag = $tag->name;
        }else{
            $tag = $name;
            $news = null;
        }
        
        return view('blog.tag',['tag' => $tag, 'news' => $news]);
    }
}
