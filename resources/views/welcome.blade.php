@extends('layouts.app')

@section('title')

Welcome

@endsection

@section('content')

<h1>This is an welcome page.</h1>

@foreach($tasks as $task)

<li>{{$task}}</li>

@endforeach

@endsection
