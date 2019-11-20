<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>

	<ul>
		<li><a href="{{url('/')}}">Home</a></li>
		<li><a href="{{url('/about')}}">About</a></li>
		<li><a href="{{url('/contact')}}">Contact</a></li>
    </ul>
    @yield('content')
</body>
</html>
