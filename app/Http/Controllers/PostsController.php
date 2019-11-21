<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::where('user_id',auth()->id())->get();
        return view('posts.index',compact('posts'));
    }

    public function create()
    {
       return view('posts.create');
    }


    public function store(Request $request)
    {

        $user_id = auth()->id();

        $data = request()->validate([
          'title' => 'required | min:5 | max:15',
          'content' => 'required | min:10 |  max:200'

        ]);

        Post::create
            ([

            'title' => request('title'),
            'content' => request('content'),
            'user_id' => $user_id,
            ]);


        return redirect('/posts');
    }


    public function show(Post $post)
    {
     // To prevent the user from viewing other users' posts
       abort_if(auth()->id() !== $post->user_id,403);


       return view('posts.show',compact('post'));
    }


    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }


    public function update(Post $post)
    {

       $post->update(request(['title','content']));


       return redirect('/posts');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
