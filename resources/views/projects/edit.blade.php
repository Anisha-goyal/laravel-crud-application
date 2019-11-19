@extends('layouts.form_layout')

@section('content')

<h2>Edit Project</h2>

<form action="{{url('/projects/'.$id)}}" method="post">
	@csrf
	{{method_field('PATCH')}}

	<div class="form-group">
		<input type="text" name="title" placeholder="Enter project title" class="form-control" value="{{$project_title}}">
	</div>

	<div class="form-group">
		<input type="text" name="content" placeholder="Enter content" class="form-control" value="{{$project_content}}">
	</div>

	<div class="form-group">
		<input type="text" name="description" placeholder="Enter Project description" class="form-control" value="{{$project_description}}">
	</div>

		<button type="submit" class="btn btn-primary">Update</button>
     </form>  


<br>

<form action="{{url('/projects/'.$id)}}" method="post">
	{{ method_field('DELETE') }}
@csrf
	<button type="submit" class="btn btn-danger">Delete</button>
	
	

</form> 


@endsection