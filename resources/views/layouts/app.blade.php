<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://user-images.githubusercontent.com/1915268/67272248-d3342000-f4d9-11e9-86ba-6933108766e0.png">
        <title>@yield('titulo')</title> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body class="antialiased bg-gray-200">
      <header class="p-5 border-b bg-purple-300 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black"><a href="/">DevStagram</a></h1>
            <nav class="flex gap-3 items-center">
                <a class="font-bold uppercase text-gray-500 text-sm" href="">Iniciar</a>
                <a class="font-bold uppercase text-gray-500 text-sm" href="{{route('registar')}}">Crear Cuenta</a>
            </nav>
        </div>   
    </header>
    <main class="container mx-auto mt-10"> 
        <h1 class="font-black text-center text-3xl mb-10">@yield('titulo')</h1>
        @yield('contenido')
    </main>
<footer class="text-center mt-10 p-5 text-gray-500 font-bold uppercase">
    DevStagram - Todos Los Derechos Recerbados {{now()->year}}
</footer>
</body>
</html>