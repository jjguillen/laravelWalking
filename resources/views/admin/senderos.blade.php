<x-app-layout>
    <x-slot name="header">
            <a href="/senderos/nuevo"><button type='button' class="bg-blue-400 hover:bg-blue-600 text-white py-2 px-4 rounded">Nuevo</button></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    KMS
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Dificultad
                </th>
                <th scope="col" class="px-6 py-3">
                    Localidad
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($senderos as $sendero)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $sendero->nombre }}
                </th>
                <td class="px-6 py-4">
                    {{ $sendero->kms }}
                </td>
                <td class="px-6 py-4">
                    {{ $sendero->descripcion }}
                </td>
                <td class="px-6 py-4">
                    {{ $sendero->dificultad }}
                </td>
                <td class="px-6 py-4">
                    {{ $sendero->localidad }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


            </div>
        </div>
    </div>

</x-app-layout>
