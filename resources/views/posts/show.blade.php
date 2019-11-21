@extends('layouts.form_layout')
@extends('layouts.app')

@section('main')

<h2>{{$post->title}}</h2>
<hr>

<div class="row">
	<div class="col-md-10">
<p>{{$post->content}}</p>
</div>

<div class="col-md-1">
<a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit</a>
</div>

<div class="col-md-1">
<form action="{{url('/posts/'.$post->id)}}" method="post">

	@csrf
	@method('DELETE')

	<button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
</div>


	@foreach($post->task as $task)
	<div>
	<form action="{{url('/tasks/'.$task->id)}}" method="post">

		@csrf

		@method('PATCH')
		<label class="checkbox {{$task->completed ? 'is-completed' : ''}}" for="completed" }}>

		<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
		{{$task->body}}

		</label>
	</form>
	</div>
	@endforeach


	<a href="{{url('/posts/'.$post->id.'/task')}}" class="btn btn-warning">Add new task</a>




@endsection
