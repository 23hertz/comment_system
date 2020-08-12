<?php

namespace App\Http\Controllers;
use Auth;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function  index(){

        $posts = Post::all();

        return view('posts.index',['posts' => $posts]);
    }

    public function show(Post $post){
      return view('posts.show',['post' => $post]);
    }

    public function create(){
      return view('posts.create');
    }

    public function store(){
      $this->validate(request(),[
        'title' => 'required',
        'body' => 'required',

      ]);

      $post = new Post;

      $post->title = request('title');
      $post->body = request('body');
      $post->writer = request('writer');
      

      //return dd($post);
      $post->save();

      return redirect('/posts');
    }
}


