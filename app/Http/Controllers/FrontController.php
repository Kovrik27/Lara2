<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::withCount('posts')->get();
        return view ('frontend.article-list',['posts'=>$posts,'title'=>'Статьи','categories'=>$categories]);
    }
    public function singlePost(Post $post)
    {
        $categories = Category::withCount('posts')->get();
        return view('frontend.single-article',['post'=>$post,'title'=>$post->title,'categories'=>$categories]);
    }
    public function postsInCategory(Category $category)
    {
        $posts = $category->posts;
        $categories = Category::withCount('posts')->get();
        return view ('frontend.article-list',['posts'=>$posts,'title'=>$category->title,'categories'=>$categories]);
    }
}
