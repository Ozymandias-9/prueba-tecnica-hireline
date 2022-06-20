<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d2e94dcd74.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="w-screen min-h-[100vh] bg-white relative flex justify-start items-start p-4">
        <div class="w-full h-full border-[1px] border-gray-300 flex flex-col justify-center items-center p-4 shadow-md">
            <h1 class="text-cyan-500 font-bold text-3xl text-left w-full px-2">Blog</h1>
            <div class="w-full h-full flex justify-between items-start flex-wrap">
                @foreach ($articles as $article)
                <div class="h-full flex justify-center items-center w-80 p-2">
                    <div class="grid grid-rows-2 shadow-md">
                        <div class="relative overflow-hidden">
                            <div class="w-full h-full bg-gray-500 max-h-36 object-contain">
                                <img src="{{$article->imgUrl}}"/>
                            </div>
                            <h2 class="absolute bottom-0 text-white text-center w-full">{{ $article->title }}</h2>
                        </div>
                        <div class="p-3">
                            <p>{{ $article->description }}</p>
                            <div class="w-full flex justify-end items-center">
                                <button class="h-8 w-8 mx-2 bg-orange-600 rounded-full flex justify-center items-center"><i class="fas fa-edit text-white"></i></button>
                                <button class="h-8 w-8 mx-2 bg-red-600 rounded-full flex justify-center items-center"><i class="fas fa-trash-alt text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>