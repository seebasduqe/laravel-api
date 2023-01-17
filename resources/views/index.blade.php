<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-700">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-3 my-10">
            @foreach ($posts as $post)
            <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                <h2 class="font-bold text-lg mb-4"> {{$post->title}} </h2>
                <p class="text-xs">{{$post->excerpt}}</p>
                <p class="text-xs text-right">{{$post->published_at}}</p>
            </div>


            @endforeach
        </div>

        <div class="mb-10">
            {{$posts->links()}}
        </div>
        
    </div>

</body>
</html>