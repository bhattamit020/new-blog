<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>document</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="big-info text-white p-5 mb-3">
		<a href="{{route('posts.index')}}"class="btn btn-secondary">Home</a>
		<a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
		
		
		<a href="{{route('login')}}" class="btn btn-secondary">Login</a>
		
	</div>
	<div class="container">
@yield('content')
</div>
<div class="bg-dark text-white p-4 text-center">
	All rights reserved amit {{date('Y')}}.
</div>
</body>
</html> 