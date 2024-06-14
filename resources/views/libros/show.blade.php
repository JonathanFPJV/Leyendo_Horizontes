<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles del libro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="{{ $libro->imagen ?: 'https://www.nicepng.com/png/detail/954-9546445_books-icon-png-iconos-de-libros-png.png' }}" alt="Imagen del libro" class="w-full h-auto">
                    </div>
                    <div class="md:w-2/3 md:pl-6 mt-6 md:mt-0">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">{{ $libro->nombre }}</h3>
                        <p class="text-gray-700 dark:text-gray-400"><strong>Autor:</strong> {{ $libro->autor }}</p>
                        <p class="text-gray-700 dark:text-gray-400"><strong>Año:</strong> {{ $libro->anio }}</p>
                        <p class="text-gray-700 dark:text-gray-400"><strong>Editorial:</strong> {{ $libro->editorial }}</p>
                        <p class="text-gray-700 dark:text-gray-400"><strong>Disponibilidad:</strong> {{ $libro->disponibilidad ? 'Disponible' : 'No disponible' }}</p>
                        
                        <div class="mt-6">
                            <form action="" method="POST">
                                @csrf
                                <x-primary-button class="w-full md:w-auto">
                                    {{ __('Alquilar libro') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

