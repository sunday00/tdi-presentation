<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [aria-current="page"] span {
            background-color: #0e779d;
            color: white;
        }
    </style>
</head>
<body>

<section>
    <div class="container p-10">
        <ul>
            @foreach ($posts as $post)
                <li class="mt-4">{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>
</section>

<section class="mt-20 p-10">
    <div class="">
        {{-- INFO: Look at this! --}}
        {{ $posts->links() }}
    </div>
</section>

</body>
</html>
