@extends('layouts.form_layout')
@extends('layouts.app')

@section('main')

<h2 class="text-center">Edit Post</h2>
<br>

<form action="{{url('/posts/'.$post->id)}}" method="post">
	@csrf
	@method('PATCH')


<div class="row">
    <div class="col-md-3">
        <label for="title">Post Title</label>
    </div>
    <div class="col-md-9">
        <input type="text" name="title" class="form-control" value="{{$post->title}}">
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-3">
        <label for="content">Post Content</label>
    </div>
    <div class="col-md-9">
        <input type="text" name="content" class="form-control" value="{{$post->content}}">
    </div>

</div>
<br>
<button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection
