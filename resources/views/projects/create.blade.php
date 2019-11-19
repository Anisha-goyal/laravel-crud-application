<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="{{url('/projects')}}" method="post">
		@csrf
		<div>
			<input type="text" name="title" placeholder="project title">
		</div><br>
		<div>
		<textarea name="description" placeholder="Project description">
		</textarea>
		</div>

		<input type="submit">
	</form>
</body>
</html>