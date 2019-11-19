<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Post;

class PostTaskController extends Controller
{
    public function update(Task $task)
    {
        $task->update([
        'completed' => request()->has('completed')

        ]);

        return back();
    }

    public function create(Post $post)
    {
    	
    	return view('tasks.create',compact('post'));
    }

    public function store(Post $post)
    {

		request()->validate([
		'body' => 'required | min:10'

		]);    	

		Task::create
            ([

            'post_id' => $post->id,
            'body' => request('body')
            ]);

            return redirect('/posts');
         
      
    }
}
