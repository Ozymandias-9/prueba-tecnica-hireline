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
    <div class="w-screen min-h-[100vh] bg-white relative flex justify-start items-center p-4">
        <div class="w-full h-full border-[1px] border-gray-300 flex flex-col justify-center items-center p-4 shadow-md">
            <div class="w-1/2 h-1/2 p-5">
                <h1 class="text-cyan-500 font-bold text-3xl text-left w-full my-2">Crear Artículo</h1>
                <form action="/newArticle" method="POST" class="w-full h-full flex flex-col justify-start items-start border-gray-300 shadow-md border-[1px] p-5">
                    <form action="/newArticle" method="POST" class="w-full h-full flex flex-col justify-start items-start border-gray-300 shadow-md border-[1px] p-5">
                        @csrf
                        <div class="w-full py-2">
                            <p class="w-full text-gray-500">Título *</p>
                            <input name="title" type="text" class="w-full border-white border-b-gray-400 border-[1px] focus:outline-none">
                        </div>
                        <div class="w-full py-2">
                            <p class="w-full text-gray-500">Link de Imagen *</p>
                            <input name="imgUrl" type="text" class="w-full border-white border-b-gray-400 border-[1px] focus:outline-none">
                        </div>
                        <div class="w-full py-2">
                            <p class="w-full text-gray-500">Descripción *</p>
                            <textarea name="description" class=" w-full border-[1px] border-gray-400 resize-none h-56 focus:outline-none"></textarea>
                        </div>
                        <div class="w-full flex justify-end items-center">
                            <button type="submit" class="bg-blue-600 text-white w-36 h-10 rounded-md flex justify-around items-center font-bold focus:outline-none"><i class="fas fa-save"></i>GUARDAR</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>