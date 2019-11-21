@extends('layouts.app')

@section('title')

Welcome

@endsection

@section('content')

<div class="text-center">
<h1>Welcome</h1>

<h4><a href="{{url('/posts')}}">See your posts here</a></h4>
</div>

@endsection



