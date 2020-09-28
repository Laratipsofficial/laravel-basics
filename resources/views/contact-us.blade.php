<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <div class="container mx-auto">
        <div>Contact Us Page</div>

        <form action="{{ route('contact-submit') }}">
            <button class="px-4 py-2 rounded text-white bg-purple-700">Submit</button>
        </form>
    </div>
</body>
</html>