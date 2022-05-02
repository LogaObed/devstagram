@extends('layouts.app')
@section('titulo')
    Registrar Cuenta
@endsection
@section('contenido')
<div class="md:flex">
    <div class="md:w-1/2">
    <p>foto</p>
    </div>
    <div class="md:w-1/2">
       <form action="" method="post">
           <div>
               <label for="nombre" class="mb-2 uppercase text-gray-500 font-bold">nombre</label>
                <input type="text" placeholder="Obed Loeza ..." name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
       </form>
    </div>
</div>
@endsection
