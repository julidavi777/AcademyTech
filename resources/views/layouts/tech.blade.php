@yield('head')
<!doctype html>
<html>

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/c96a99c608.js"></script>
</head>
<body class="bg-indigo-600 text-cyan-100">
<nav class="bg-indigo-500  relative">
    <div class=" mx-auto container text-cyan-100 flex justify-around mb-20  ">
        <div>
            <img src="{{ asset('logo1.png') }}" alt="">
        </div>
        <div class="my-auto text-end 
         flex  ">
            <div class="flex mx-2">
                <img src="{{ asset('home.png') }}" width="25" alt="">
                <a class="hover:text-fuchsia-400 text-lg  " href="">Inicio</i></a>
            </div>
            <div class="flex mx-2">
                <img src="{{ asset('course.png') }}" width="25" alt="">
                <a class="hover:text-fuchsia-400 text-lg  " href="">Cursos</i></a>
            </div>
            <div class="flex mx-2">
                <img src="{{ asset('teacher.png') }}" width="25" alt="">
                <a class="hover:text-fuchsia-400 text-lg  " href="">Docentes</i></a>
            </div>

        </div>
    </div>
</nav>

    @yield('content')

</body>
