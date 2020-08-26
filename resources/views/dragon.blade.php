@extends ('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>posts</title>
</head>
<body>
	<h1>posts</h1>
	<h2>post</h2>
	<p>{{ $post->body }}</p>
</body>
</html>
@endsection