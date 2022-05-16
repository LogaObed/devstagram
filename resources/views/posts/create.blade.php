@extends('layouts.app')
@section('titulo')
Crea una nueva Publicación
@endsection
{{-- <form action="/imagenes" id="dropzone" 
class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"></form> --}}
@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-6/12 px-10">
        <form action="/imagenes" id="dropzone"
            class="dropzone bg-purple-100 border-dashed border-3 w-full h-96 rounded flex flex-col justify-center items-center">
        </form>
    </div>
    <div class="md:w-5/12 p-10 bg-white rounded-lg shadow-xl">
        <form class="w-full max-w-sm" action="{{ route('registar') }}" method="post" novalidate>

            @csrf
            <div class="mb-5">
                <label for="titulo" class="mb-2 capitalize text-gray-500 font-bold">titulo</label>
                <input value="{{ old('titulo') }}" type="text" placeholder="Titulo de la Publicación..." name="titulo"
                    id="titulo"
                    class="mt-1 capitalize border p-2.5 w-full rounded-lg shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 @error('titulo') border-red-600 @enderror">
                @error('titulo')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center normal-case">{{ $message }}
                </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="descripcion" class="mb-2 capitalize text-gray-500 font-bold">Descripción</label>
                <textarea name="descripcion" placeholder="Descripcion de la Publicación..." id="descripcion"
                    class="mt-1 capitalize border p-2.5 w-full rounded-lg shadow-sm focus:outline-none focus:bg-white focus:border-purple-500 @error('descripcion') border-red-600 @enderror">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center normal-case">{{ $message }}
                </p>
                @enderror
            </div>
            <input type="submit" value="Crear Publicación"
                class="shadow bg-purple-500 hover:bg-purple-400 mt-2 transition-colors cursor-pointer capitalize font-bold w-full p-2.5 text-white rounded-lg">

        </form>
    </div>
</div>
@endsection
