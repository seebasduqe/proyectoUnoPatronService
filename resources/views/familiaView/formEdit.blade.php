@extends('Layaout.plantilla')

@section('content')
<div class="flex justify-center items-center h-full">
          <form class="w-full max-w-sm" action="familias/actualizar" method="POST">
                    @method('PUT')
                    @csrf
                    <h1 class="text-3xl text-gray-500 mb-7">Actualizar familia {{$familia->nombre}}</h1>
                    
                    <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 mb-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    type="text"
                    value={{$familia->codigo}}
                    name="codigo"
                    />
                    
                    <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 mb-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    type="text"
                    value={{$familia->nombre}}
                    name="nombre"
                    />

                    <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 mb-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    type="text"
                    value={{$familia->descripcion}}
                    name="descripcion"
                    />

                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                              actualizar
                    </button>
          </form>
</div>
@endsection