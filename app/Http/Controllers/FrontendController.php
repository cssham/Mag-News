<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $all_news = Post::with('user','category')->get();
        return response()->json([
            'all_news' => $all_news
        ],200);
    }
    public function single_news($id){
        $single_news = Post::with('user','category')->where('id',$id)->first();
        return response()->json([
            'single_news' => $single_news
        ],200);
    }
    public function all_categories(){
        $categories = Category::with('posts')->get();
        return response()->json([
            'categories' => $categories
        ],200);
    }

    public function news_by_category($id){
        $all_news_by_category = Post::with('user','category')->where('category_id',$id)->orderBy('id','desc')->get();
        return response()->json([
            'all_news_by_category' => $all_news_by_category
        ],200);
    }
    public function search_news(Request $request){
            $search = $request->input('s');
        $news_by_search = Post::with('user','category')->where('title','LIKE',"%$search%")->orWhere('description','LIKE',"%$search%")->get();
        return response()->json([
            'news_by_search' => $news_by_search
        ],200);
    }
    public function latest(){
        $all_latest_news = Post::with('user','category')->orderBy('id','desc')->get();
        return response()->json([
            'all_latest_news' => $all_latest_news
        ],200);
    }
}
