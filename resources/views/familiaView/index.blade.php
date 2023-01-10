@extends('Layaout.plantilla')

@section('content')
<div class="relative flex flex-wrap items-center justify-between py-5 bg-gray-200 text-gray-700 shadow-lg">
          <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
                    <h1 class="text-xl mb-2">Lista de Familias</h1>
                    <p>famIcon</p>
                    <button class="bg-green-900 px-4 py-2 text-white rounded-lg">
                              <div class="flex flex-row">iconAgg</div>
                    </button>
          </div>
</div>
<div class="p-1 bg-gray-100">
          <table class="w-full">
                    <thead class="bg-gray border-b-2 border-gray-200">
                              <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left"># Codigo</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Familia</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Descripcion</th>
                    </tr>
                    </thead>
                    <tbody>
                              @foreach ($familias as $familia)
                                        <tr>
                                                  <td> {{ $familia->codigo }} </td>
                                                  <td> {{ $familia->nombre }} </td>
                                                  <td> {{ $familia->descripcion }} </td> 
                                                  <td> <button class="bg-indigo-500 px-4 py-2 text-white rounded-lg"> editar </button></td>
                                                  <td> <button class="bg-red-500 px-4 py-2 text-white rounded-lg"> borrar </button></td>  
                                        </tr>
                              @endforeach
                    </tbody>
          </table>
          
          
</div>
@endsection