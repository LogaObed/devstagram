@extends('layouts.app')
@section('titulo')
    Registrar Cuenta
@endsection
@section('contenido')
    <div class="md:flex md:justify-center md:gap-4  md:items-center">
        <div class="md:w-6/12 p-4">
            <img src="{{asset('img/registrar.jpg')}}" class="rounded-lg w-full" alt="" srcset="">
        </div>
        <div class="md:w-4/12  bg-white mx-3 p-6 rounded-lg shadow-lg">
            <form class="w-full max-w-sm" action="{{route('registar')}}" method="post" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 capitalize text-gray-500 font-bold">Nombre</label>
                    <input value="{{old('name')}}" type="text" placeholder="Obed Loeza ..." name="name" id="name"
                        class="capitalize border p-2.5 w-full rounded-lg shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 @error('name') border-red-600 @enderror">
                         @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center normal-case">{{$message}}</p>    
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="usuario" class="mb-2 capitalize text-gray-500 font-bold">nombre usuario</label>
                    <input value="{{old('usuario')}}" type="text" placeholder="ObedLoga..." name="usuario" id="usuario" 
                        class="border p-2.5 w-full rounded-lg capitalize shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 @error('usuario') border-red-600 @enderror">
                        @error('usuario')
                        <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center normal-case">{{$message}}</p>    
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 capitalize text-gray-500 font-bold">Correo Electronico</label>
                    <input value="{{old('email')}}" type="email" placeholder="ejemplo@ejemplo.com" name="email" id="email"
                        class="border p-2.5 w-full rounded-lg shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 @error('email') border-red-600 @enderror">
                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center normal-case">{{$message}}</p>    
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 capitalize text-gray-500 font-bold">Contraseña</label>
                    <input type="password"  placeholder="Contraseña.." name="password" id="password"
                        class=" border p-2.5 w-full rounded-lg shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 @error('password') border-red-600 @enderror">
                        @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center normal-case">{{$message}}</p>    
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 capitalize text-gray-500 font-bold">Verificacion
                        Contraseña</label>
                    <input type="password" placeholder="Contraseña.." name="password_confirmation" id="password_confirmation"
                        class=" border p-2.5 w-full rounded-lg shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 ">
                </div>
                <input type="submit" value="Crear Cuenta"
                    class="shadow bg-purple-500 hover:bg-purple-400 mt-2 transition-colors cursor-pointer capitalize font-bold w-full p-2.5 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
