<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"
        href="https://user-images.githubusercontent.com/1915268/67272248-d3342000-f4d9-11e9-86ba-6933108766e0.png">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-200">
    <header class="p-5 border-b bg-purple-300 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black"><a href="/">DevStagram</a></h1>
            @auth
                <nav class="flex gap-3 items-center">
                    <a class="flex items-center gap-2 border-none p-2 text-sm capitalize  font-bold cursor-pointer" href="{{route('posts.create')}}"> 
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                        Crear</a>
                    <a class="font-bold capitalize text-gray-500 text-sm" href="{{route('post.index',auth()->user()->usuario)}}">{{ auth()->user()->usuario }}</a>
                    <form action="{{ route('logout') }}" method="post" novalidate>
                        @csrf
                        <button type="submit" class="font-bold capitalize text-gray-500 text-sm cursor-pointer">
                            {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg> --}}
                            Cerrar Sesión
                        </button>
                </nav>
            @endauth
            @guest
                <nav class="flex gap-3 items-center">
                    <a class="font-bold capitalize text-gray-500 text-sm" href="{{ route('login') }}">Iniciar</a>
                    <a class="font-bold capitalize text-gray-500 text-sm" href="{{ route('registar') }}">Crear Cuenta</a>
                </nav>
            @endguest
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h1 class="font-black text-center text-3xl mb-10">@yield('titulo')</h1>
        @yield('contenido')
    </main>
    <footer class="text-center mt-10 p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos Los Derechos Recerbados {{ now()->year }}
    </footer>
</body>

</html>
