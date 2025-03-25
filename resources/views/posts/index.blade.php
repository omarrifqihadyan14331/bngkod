<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Post</title>
</head>
<body>
    <h1>Daftar Post</h1>
    <ul>
        @foreach ($posts as $post)
            <li><strong>{{ $post->title }}</strong>: {{ $post->content }}</li>
        @endforeach
    </ul>
</body>
</html>
