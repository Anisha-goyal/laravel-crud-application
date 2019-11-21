
@extends('layouts.form_layout')
@extends('layouts.app')

@section('main')

<h2>Your Posts</h2>


    @if($posts->count())

    <ul>
    @foreach ($posts as $post)

    <a href="{{url('posts/'.$post->id)}}">
    <li>{{$post->title}}</li>
    </a>

    @endforeach
    </ul>

    @else
    <p>You haven't created any post yet.</p>

    @endif


<a href="{{url('/posts/create')}}" class="btn btn-warning">Add new post</a>

@endsection
