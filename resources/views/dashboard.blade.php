@extends('/layouts.app')
@section('titulo')
    Muro {{ $user->usuario }}
@endsection
@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-full w-full" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                  </svg> --}}
                  <div class="bg-gray-300 p-3 rounded-full  h-full w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                  </div>
            </div>
            <div class="md:w-8/12 lg:w-6/12 text-center px-5 text-gray-500 text-3xl">
                {{ $user->usuario }}
            </div>
        </div>
    </div>
@endsection
