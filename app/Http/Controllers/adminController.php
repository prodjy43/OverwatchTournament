<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        $news = News::all();
        return view('admin.index', ['news' => $news]);
    }

    public function delete(Request $request){
        $id = $request->all()['id'];
        News::destroy($id);
        return redirect('/admin');
    }

    public function createNews(){
        $tags = Tag::all();
        return view('admin.createNews', ['tags' => $tags]);
    }

    public function storeNews(Request $request){
        $tags = $request->all()['tags'];
        $tid = [];
        foreach($tags as $tag){
            if(intval($tag) === 0){
                $ntag = Tag::create(['name' => $tag]);
                array_push($tid, $ntag->id);
            }
            else{
                array_push($tid, intval($tag));
            }
        }
        $post = $request->all();
        $npost = News::create(['title' => $post['title'], 'slug' => str_slug($post['title']), 'content' => $post['content'], 'user_id' => Auth::user()->id]);
        $npost->tags()->sync($tid);

        return redirect('/admin');
    }

    public function editNews($slug){
        $tags = Tag::all();
        $post = News::where('slug', '=', $slug)->first();
        return view('admin.editNews', ['post' => $post, 'tags' => $tags]);
    }

    public function updateNews(Request $request, $slug){
        $tags = $request->all()['tags'];
        $tid = [];
        foreach($tags as $tag){
            if(intval($tag) === 0){
                $ntag = Tag::create(['name' => $tag]);
                array_push($tid, $ntag->id);
            }
            else{
                array_push($tid, intval($tag));
            }
        }

        $post = $request->all();
        News::where('slug', '=', $slug)->update(['title' => $post['title'], 'content' => $post['content']]);
        $upost = News::where('slug', '=', $slug)->first();
        $upost->tags()->sync($tid);
        return redirect('/admin/edit/news/'.$slug);
    }
}
