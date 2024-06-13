{{-- resources/views/libros/search.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resultados de busqueda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($libros->isEmpty())
                        <p>{{ __('No se encontraron libros con el término:') }} "{{ $query }}"</p>
                    @else
                        <p>{{ __('Resultados de búsqueda para:') }} "{{ $query }}"</p>
                    @endif
                </div>
            </div>

            <!-- Books Grid -->
            <div class="grid grid-cols-4 gap-4 mt-8">
                @foreach($libros as $libro)
                    <x-book :image="$libro->imagen" :title="$libro->nombre" :author="$libro->autor"/>
                @endforeach
            </div>
        </div>
    </div>    
    
</x-app-layout>

