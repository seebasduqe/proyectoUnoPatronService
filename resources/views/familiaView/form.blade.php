@extends('Layaout.plantilla')

@section('content')
<div class="flex justify-center items-center h-full">
          <form class="w-full max-w-sm" action="/familias/crear" method="POST">
                    @csrf
                    <h1 class="text-3xl text-gray-500 mb-7">Agregar familia</h1>
                    
                    <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 mb-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    type="text"
                    placeholder="Escriba el codigo"
                    name="codigo"
                    />
                    
                    <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 mb-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    type="text"
                    placeholder="Escriba la familia"
                    name="nombre"
                    />

                    <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 mb-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    type="text"
                    placeholder="Escriba una descripcion"
                    name="descripcion"
                    />

                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                              guardar
                    </button>
          </form>
</div>
@endsection