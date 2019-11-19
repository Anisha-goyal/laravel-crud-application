@extends('layouts.form_layout')

@section('content')

<h2>Posts</h2>
<ul>
@foreach ($posts as $post)

<a href="{{url('posts/'.$post->id)}}">
<li>{{$post->title}}</li>
</a>

@endforeach
</ul>

<a href="{{url('/posts/create')}}" class="btn btn-warning">Add new post</a>

@endsection
