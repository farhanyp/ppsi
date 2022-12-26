<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

    $title = '';
    if(request('category')){
        $category = Category::firstWhere('slug', request('category'));
        $title = ' in '.$category -> name;
    }

    if(request('author')){
        $author = User::firstWhere('username', request('author'));
        $title = ' by '.$author-> username;
    }

        // dd(request('search'));
        return view('posts',[
            "title" => "All Posts". $title ,
            "active" => "blog",
            "posts" =>  Post::latest()->filter(request(['search','category','author']))->paginate(5)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Post",
            "active" => "post",
            "post"=> $post
        ]);
    }
}
