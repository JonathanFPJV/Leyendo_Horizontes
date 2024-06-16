{{-- resources/views/libros/show.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles del libro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if(session('success'))
                    <div class="p-6 bg-green-500 text-white">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="flex flex-col sm:flex-row">
                    <img src="{{ $libro->imagen ?: 'https://www.nicepng.com/png/detail/954-9546445_books-icon-png-iconos-de-libros-png.png' }}" alt="Imagen del libro" class="w-full sm:w-1/3">
                    <div class="p-6 text-gray-900 dark:text-gray-100 sm:w-2/3">
                        <h3 class="text-2xl font-bold mb-4">{{ $libro->nombre }}</h3>
                        <p><strong>Autor:</strong> {{ $libro->autor }}</p>
                        <p><strong>Año:</strong> {{ $libro->anio }}</p>
                        <p><strong>Editorial:</strong> {{ $libro->editorial }}</p>
                        <p><strong>Disponibilidad:</strong> {{ $libro->disponibilidad ? 'Disponible' : 'No disponible' }}</p>
                        @if ($libro->disponibilidad)
                            <form action="{{ route('prestamos.store') }}" method="POST" class="mt-4">
                                @csrf
                                <input type="hidden" name="libro_id" value="{{ $libro->id }}">
                                <x-primary-button class="ms-4">
                                    {{ __('Alquilar libro') }}
                                </x-primary-button>
                            </form>
                        @else
                            <p class="text-red-500">{{ __('Este libro no está disponible actualmente.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


