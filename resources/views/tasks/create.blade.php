@extends('layouts.form_layout')
@extends('layouts.app')

@section('main')


@if($errors->any())

<div class="alert alert-danger">
@foreach($errors->all() as $error)

{{$error}}

@endforeach

</div>
@endif

<h2 class="text-center">Add new Task</h2>

<form action="{{url('/posts/'.$post->id.'/task')}}" method="post" class="text-center">
@csrf

	<input type="text" name="body" class="form-control" value="{{old('body')}}">
	<br>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
