<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalles del Libro: {{ $libro->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="font-bold text-xl mb-2 text-gray-800 dark:text-gray-200">Título: {{ $libro->nombre }}</div>
                    <p class="text-gray-700 dark:text-gray-400 text-base">
                        Autor: {{ $libro->autor }}
                    </p>
                    <p class="text-gray-700 dark:text-gray-400 text-base">
                        Año: {{ $libro->anio }}
                    </p>
                    <!-- Agrega más detalles del libro según tus campos en la base de datos -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
