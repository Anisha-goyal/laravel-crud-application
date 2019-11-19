@extends('layouts.form_layout')

@section('content')

<h1> Project no. {{$projects->id}}</h1>

Project title: {{$projects->title}}<br>
Project content: {{$projects->content}} <br>
Project Description: {{$projects->description}}
@endsection