<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about-us') }}">About Us</a>
    <a href="{{ URL::temporarySignedRoute('secret', now()->addSeconds(5)) }}">Secret</a>

    <div>
      Home Page
    </div>

    <div>
        {{ route('post.comment', ['post' => 'first-post', 'comment' => 'first-comment', 'helo' => 'world']) }}
    </div>
</body>
</html>