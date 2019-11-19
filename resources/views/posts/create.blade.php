@extends('layouts.form_layout')

@section('content')
<h1>Create a Post</h1>
<br>

<form action="{{url('/posts')}}" method="post">
@csrf

@if($errors->any())

<div class="alert alert-danger">
    <ul>
@foreach($errors->all() as $error)

<li style="color:red;">{{$error}}</li>

@endforeach
</ul>
</div>

@endif

<div class="row">
    <div class="col-md-3">
        <label for="title">Post Title</label>
    </div>
    <div class="col-md-9">
        <input type="text" name="title" class="form-control" value={{old('title')}}>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-3">
        <label for="content">Post Content</label>
    </div>
    <div class="col-md-9">
        <input type="text" name="content" class="form-control" value="{{old('content')}}">
    </div>

</div>
<br>
<button type="submit" class="btn btn-primary">Create Post</button>
</form>

@endsection
