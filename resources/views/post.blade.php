<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
<h1>
    {{$post->title}}
</h1>

<div>
    {!! $post->body !!}
</div>

<a href="/">GO Back Home</a>

</body>
