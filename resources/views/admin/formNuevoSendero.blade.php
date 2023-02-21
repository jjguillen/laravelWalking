<x-app-layout>
    <x-slot name="header">
            <a href="/senderos/nuevo"><button type='button' class="bg-blue-400 hover:bg-blue-600 text-white py-2 px-4 rounded">Nuevo</button></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

    <div class="w-full max-w-xs mx-auto">
        <h3 class='text-lg text-green-500'>Nuevo Sendero</h3>
        
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method='POST' action='/senderos/store' enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Nombre
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nombre" name="nombre" type="text" value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="kms">
                    Kilómetros
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="kms" name="kms" type="number" min='1' placeholder="10" value="{{ old('kms') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                    Descripción
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="descripcion" name="descripcion" value="{{ old('descripcion') }}"  type="text">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="localidad">
                    Localidad
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="localidad" name="localidad" value="{{ old('localidad') }}"  type="text">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="img">
                    Imagen
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="img" name="img" value="{{ old('img') }}"  type="file">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dificultad">
                    Dificultad
                </label>
                <select
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    name="dificultad">
                    <option value="facil">Fácil</option>
                    <option value="media">Media</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>


            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Crear
                </button>
            </div>
        </form>
    </div>


            </div>
        </div>
    </div>
</x-app-layout>
