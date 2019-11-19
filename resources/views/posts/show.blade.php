@extends('layouts.form_layout')

@section('content')

<h2>{{$post->title}}</h2>
<hr>

<p>{{$post->content}}</p>

<a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit</a>
<br><br>
<form action="{{url('/posts/'.$post->id)}}" method="post">

	@csrf
	@method('DELETE')

	<button type="submit" class="btn btn-danger">Delete</button>
</form>


@endsection
